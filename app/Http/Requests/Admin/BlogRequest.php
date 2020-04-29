<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title' => 'required',
            'sub_body' => 'required',
            'body' => 'required',
            'auther' => 'required'
        ];
    }

    public function messages() {

        return [

            'title.required' => 'The Post Title is required',
            'sub_body.required' => 'Small Description is required',
            'body.required' => 'Description is required',
            'auther.required' => 'Author name is required',

        ];
    }
}
