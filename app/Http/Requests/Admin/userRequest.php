<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name' => 'required|unique:users,name|max:100|string',
            'email' => 'required|unique:users,email|max:100|string',
             'phone' => 'required|unique:users,phone|min:14|numeric',
            'password' => 'required|string|min:8|max:32',
        ];
    }
}
