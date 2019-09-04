<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class CourseStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:51|min:3|unique:courses,title',
            'description' => 'required|min:3',
            'image' => 'required|mimes:jpeg,bmp,png,jpg',
        ];
    }

     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Course Title is required!',
            'title.min' => 'Course Title should be at least 3 characters!',
            'description.required' => 'Course Description is required!',
            'description.min' => 'Course Description should be at least 3 characters!',
        ];
    }
}
