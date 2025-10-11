<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'content' => ['required', 'max:1000'],
            'name' => ['required', 'max:255'],
            'designation' => ['required', 'max:255'],
            'career_before' => ['required', 'max:255'],
            'career_after' => ['required', 'max:255'],
            'class_year' => ['required', 'numeric', 'digits:4'],
            'batch' => ['required', 'max:255'],
        ];
    }
}
