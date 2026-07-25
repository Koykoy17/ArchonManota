<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class NewsletterController extends Controller
{
    /**
     * Handle incoming newsletter subscription.
     *
     * Route:   POST /newsletter
     * Name:    newsletter.subscribe
     */
    public function subscribe(Request $request): RedirectResponse|JsonResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email:rfc,dns', 'max:255'],
        ], [
            'email.required' => 'Email address is required.',
            'email.email'    => 'Please enter a valid email address with an active domain.',
        ]);

        $email = strtolower(trim($validated['email']));
        $cacheKey = 'newsletter_subscriber_' . md5($email);

        // Prevent duplicate subscription using Laravel Cache
        if (Cache::has($cacheKey)) {
            $duplicateMsg = 'You are already subscribed to our newsletter with this email address.';

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => $duplicateMsg,
                    'errors' => ['email' => [$duplicateMsg]],
                ], 422);
            }

            return redirect()->to(url()->previous() . '#footer')
                ->withErrors(['email' => $duplicateMsg]);
        }

        // Cache the subscriber email for 30 days
        Cache::put($cacheKey, true, now()->addDays(30));

        // Log the newsletter subscription for administrative record
        Log::info('New Newsletter Subscription', [
            'email' => $email,
            'ip' => $request->ip(),
            'timestamp' => now()->toDateTimeString(),
        ]);

        if ($request->wantsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Thank you! You have successfully subscribed to our newsletter.',
            ]);
        }

        return redirect()->to(url()->previous() . '#footer')
            ->with('newsletter_success', 'Thank you! You have successfully subscribed to our newsletter.');
    }
}
