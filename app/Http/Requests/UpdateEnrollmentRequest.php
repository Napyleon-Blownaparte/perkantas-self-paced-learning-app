<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Enrollment;
use App\Models\Course;

class UpdateEnrollmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Retrieve the enrollment instance using the route parameter

        // $enrollment = $this->route('enrollment'); // Assuming route parameter is 'enrollment'

        // // Check if the enrollment exists
        // if (!$enrollment) {
        //     return false; // Enrollment not found
        // }

        // // Check if the authenticated user is an instructor for the course related to the enrollment
        // return $enrollment->course_id &&
        //        Course::find($enrollment->course_id)
        //              ->instructors()
        //              ->where('instructors.id', auth()->id())
        //              ->exists();
        return true;
    }




    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
            'status' => 'required|string|in:pending,accepted,stopped,finished',
        ];
    }

}
