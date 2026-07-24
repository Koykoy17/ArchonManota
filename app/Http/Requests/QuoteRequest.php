<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class QuoteRequest extends FormRequest
{
    /**
     * Public quote form submission authorization.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'full_name'          => ['required', 'string', 'max:255'],
            'email'              => ['required', 'email', 'max:255'],
            'trucks'             => ['required', 'string', 'in:dump-truck,prime-mover,tractor,cargo,other'],
            'phone'              => ['required', 'numeric', 'digits:11'],
            'additional_details' => ['nullable', 'string', 'max:1000'],
            'terms'              => ['accepted'],
        ];
    }

    /**
     * Clean, basic, user-friendly validation error messages.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'full_name.required' => 'Full name is required.',
            'email.required'     => 'Email address is required.',
            'email.email'        => 'Please enter a valid email address.',
            'trucks.required'    => 'Please select a truck option.',
            'trucks.in'          => 'Please select a valid option.',
            'phone.required'     => 'Phone number is required.',
            'phone.numeric'      => 'Phone number must contain only numbers.',
            'phone.digits'       => 'Phone number must be exactly 11 digits (e.g. 09171234567).',
            'terms.accepted'     => 'You must accept the terms.',
        ];
    }
}
