<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNewsAndEventRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'badge_title' => ['required', 'max:255'],
            'short_description' => ['required', 'max:255'],
            'description' => ['required', 'max:255'],
            'start_date' => ['required', 'max:255'],
            'start_time' => ['required', 'date_format:H:i', 'max:255'],
            'end_time' => ['required', 'date_format:H:i', 'max:255'],
            'location' => ['required', 'max:255'],
            'organizer' => ['required', 'max:255'],
            'contact' => ['required', 'email', 'max:255'],
            'phone' => ['required', 'digits_between:10,15'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,webp', 'max:2048'],
        ];
    }
}
