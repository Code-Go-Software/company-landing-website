<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
        $rules = [
            'title' => 'required',
            'excert' => 'required',
            'author' => 'required',
            'content' => 'required',
        ];

        if(request()->image)
            $rules['image'] = 'required|mimes:jpg,png,jpeg|max:1024';

        return $rules;
    }
}
