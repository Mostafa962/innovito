<?php

namespace App\Http\Requests\Section;

use Illuminate\Foundation\Http\FormRequest;

class SectionUpdateRequest extends FormRequest
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
            'title' => 'required|max:191|min:3',
            'order' => 'required|numeric|min:1',
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
            'title.required' => 'Section Title is required!',
            'title.min' => 'Section Title should be at least 3 characters!',
            'order.required' => 'Section Order is required!',
        ];
    }
}
