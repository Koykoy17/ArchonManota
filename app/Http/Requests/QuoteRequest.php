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
            'full_name'          => ['required', 'string', 'min:2', 'max:255', 'regex:/^[a-zA-Z\s\.\,\'\-]+$/'],
            'email'              => ['required', 'string', 'email:rfc,dns', 'max:255'],
            'trucks'             => ['required', 'string', 'in:dump-truck,prime-mover,tractor,cargo,other'],
            'phone'              => ['required', 'string', 'regex:/^[0-9+\-\s()]+$/', 'min:7', 'max:15'],
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
            'full_name.min'      => 'Full name must be at least 2 characters.',
            'full_name.regex'    => 'Full name may only contain letters, spaces, and punctuation.',
            'email.required'     => 'Email address is required.',
            'email.email'        => 'Please enter a valid email address with an active domain.',
            'trucks.required'    => 'Please select a truck option.',
            'trucks.in'          => 'Please select a valid truck option.',
            'phone.required'     => 'Phone number is required.',
            'phone.regex'        => 'Phone number must contain a valid number format.',
            'phone.min'          => 'Phone number must be at least 7 digits.',
            'phone.max'          => 'Phone number cannot exceed 15 digits.',
            'terms.accepted'     => 'You must accept the terms.',
        ];
    }
}
