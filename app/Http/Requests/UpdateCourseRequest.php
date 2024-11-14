<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'start_period' => 'sometimes|date',
            'end_period' => 'sometimes|date|after_or_equal:start_period',
            'estimated_time' => 'sometimes|integer|min:1',
            'thumbnail_image' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
            'banner_image' => 'sometimes|image|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
