<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class QuoteController extends Controller
{
    /**
     * Handle incoming quote form submission.
     *
     * Route:   POST /quote
     * Name:    quote.store
     * Request: App\Http\Requests\QuoteRequest
     */
    public function store(QuoteRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Log the validated submission for backend audit trail
        Log::info('New Request a Quote Form Submission', [
            'full_name' => $validated['full_name'],
            'email'     => $validated['email'],
            'trucks'    => $validated['trucks'],
            'phone'     => $validated['phone'],
            'ip'        => $request->ip(),
            'timestamp' => now()->toDateTimeString(),
        ]);

        return redirect()->to(url()->previous() . '#quote')
            ->with('quote_success', 'Thank you! Your quote request has been submitted successfully. Our team will contact you shortly.');
    }
}
