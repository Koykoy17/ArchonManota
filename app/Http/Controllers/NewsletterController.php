<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\JsonResponse;
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
            'email' => ['required', 'email', 'max:255'],
        ]);

        // Log the newsletter subscription for administrative record
        Log::info('New Newsletter Subscription', [
            'email'     => $validated['email'],
            'ip'        => $request->ip(),
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
