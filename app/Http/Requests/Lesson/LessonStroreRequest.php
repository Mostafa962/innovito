<?php

namespace App\Http\Requests\Lesson;

use Illuminate\Foundation\Http\FormRequest;

class LessonStroreRequest extends FormRequest
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
        if($this->lesson_type_id == 1)  //Text
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'description' => 'required|min:3',
                'section_id' => 'required',
            ];
        }
        elseif($this->lesson_type_id == 2)  //Image
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'image' => 'required|mimes:jpeg,bmp,png,jpg',
                'section_id' => 'required',
            ];

        }
        elseif($this->lesson_type_id == 3)  //Text + Image
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'description' => 'required|min:3',
                'image' => 'required|mimes:jpeg,bmp,png,jpg',
                'section_id' => 'required',
            ];

        }
        elseif($this->lesson_type_id == 4)  //File
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'description' => 'required|min:3',
                'section_id' => 'required',
                'localvideo_link' => 'required|mimes:pdf,docx,pptx'
            ];

        }
        elseif($this->lesson_type_id == 5)  //External Content
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'description' => 'required|min:3',
                'section_id' => 'required',
                'external_link' => 'required|url',
                'video_duration' => 'required'
            ];

        }
        elseif($this->lesson_type_id == 6)  //Internal Upload
        {
            $rules = [
                'title' => 'required|max:51|min:3',
                'description' => 'required|min:3',
                'section_id' => 'required',
                'localvideo_link' => 'required|file|mimes:mp4,mov,ogg,qt',
                'video_duration' => 'required'
            ];

        }
        return $rules;
    }
     /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'title.required' => 'Lesson Title is required!',
            'title.min' => 'Lesson Title should be at least 3 characters!',
            'description.required' => 'Lesson Description is required!',
            'description.min' => 'Lesson Description should be at least 3 characters!',
            'external_link.url' => 'Lesson URL isnot real link!',
        ];
    }
}
