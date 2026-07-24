<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

/**
 * Mailable sent when a quote request form is submitted.
 *
 * Triggered by: QuoteController::store()
 *
 * Recipients:
 *   1. The enquirer (confirmation email)
 *   2. Site admin / sales team (notification email)
 *
 * Implementation notes:
 *   - Implement ShouldQueue to process emails asynchronously (recommended).
 *   - Pass the validated quote data via the constructor.
 *   - Create a dedicated Blade email template:
 *       resources/views/emails/quote-submitted.blade.php  (TODO)
 *
 * TODO:
 *   - Add constructor parameter: public array $quoteData
 *   - Update envelope() subject to be dynamic (include submitter name)
 *   - Update content() view to point to the correct email template
 *   - Implement ShouldQueue interface once queue driver is configured
 *   - Configure MAIL_* env variables in .env
 */
class QuoteSubmittedMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * TODO: Accept quote data as constructor argument:
     *   public function __construct(public readonly array $quoteData) {}
     */
    public function __construct()
    {
        // TODO: Accept and store quote data
    }

    /**
     * Get the message envelope.
     *
     * TODO: Make subject dynamic, e.g.:
     *   subject: "New Quote Request from {$this->quoteData['name']}"
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Quote Request', // TODO: Make dynamic
        );
    }

    /**
     * Get the message content definition.
     *
     * TODO: Create the email Blade view:
     *   resources/views/emails/quote-submitted.blade.php
     *   Then update view reference below.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.quote-submitted', // TODO: Create this view
        );
    }

    /**
     * Get the attachments for the message.
     *
     * TODO: Add PDF summary attachment if required.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
