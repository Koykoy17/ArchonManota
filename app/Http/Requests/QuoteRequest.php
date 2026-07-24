<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * TODO: Keep as `true` for public quote form (no auth required).
     *       Change to auth check if quote form is restricted to logged-in users.
     */
    public function authorize(): bool
    {
        return true; // Public form – no authentication required
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * Fields (all aligned with sections/quote.blade.php form):
     *   - name     required | string | max:255
     *   - email    required | email | max:255
     *   - phone    optional | string | max:20
     *   - company  optional | string | max:255
     *   - message  required | string | min:10 | max:2000
     *   - honeypot optional | must be empty (spam protection)
     *
     * TODO:
     *   - Add `phone` regex rule once phone format is confirmed
     *   - Add `honeypot` rule: 'honeypot' => ['nullable', 'max:0']
     *   - Consider adding reCAPTCHA validation rule (future)
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            // TODO: Uncomment and adjust once form fields are finalised
            // 'name'     => ['required', 'string', 'max:255'],
            // 'email'    => ['required', 'email', 'max:255'],
            // 'phone'    => ['nullable', 'string', 'max:20'],
            // 'company'  => ['nullable', 'string', 'max:255'],
            // 'message'  => ['required', 'string', 'min:10', 'max:2000'],
            // 'honeypot' => ['nullable', 'max:0'],
        ];
    }

    /**
     * Custom validation error messages.
     *
     * TODO: Populate with user-friendly messages once rules are finalised.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            // 'name.required'    => 'Please enter your full name.',
            // 'email.required'   => 'Please enter a valid email address.',
            // 'email.email'      => 'The email address format is invalid.',
            // 'message.required' => 'Please describe your enquiry.',
            // 'message.min'      => 'Your message must be at least 10 characters.',
        ];
    }
}
