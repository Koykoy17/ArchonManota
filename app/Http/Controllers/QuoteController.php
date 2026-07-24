<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuoteRequest;
use App\Mail\QuoteSubmittedMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    /**
     * Handle an incoming quote form submission.
     *
     * Route:   POST /quote
     * Name:    quote.store
     * Request: App\Http\Requests\QuoteRequest  (handles validation)
     * Mail:    App\Mail\QuoteSubmittedMail
     *
     * Success flow:
     *   1. Validate input via QuoteRequest
     *   2. Persist the quote (optional – to DB or just via email)
     *   3. Send confirmation email to submitter
     *   4. Send notification email to site admin
     *   5. Redirect back with success flash message
     *
     * Error flow:
     *   - Laravel automatically redirects back with validation errors
     *   - Errors are displayed in sections/quote.blade.php via @error
     *
     * TODO:
     *   - Create a Quote model & migration if storing to DB
     *   - Configure mail driver in .env (MAIL_MAILER, MAIL_FROM_ADDRESS, etc.)
     *   - Queue the mail using ShouldQueue on QuoteSubmittedMail
     *   - Rate-limit this endpoint (throttle middleware or RateLimiter)
     *   - Add honeypot validation to guard against spam bots
     */
    public function store(QuoteRequest $request): RedirectResponse
    {
        // TODO: Implement quote storage and mail dispatch
        // $validated = $request->validated();

        // TODO: Persist quote to DB
        // Quote::create($validated);

        // TODO: Send emails
        // Mail::to($validated['email'])->send(new QuoteSubmittedMail($validated));
        // Mail::to(config('mail.admin_address'))->send(new QuoteSubmittedMail($validated));

        return redirect()->back()->with('success', ''); // TODO: Set success message
    }
}
