<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
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
            'first_name' => 'required',
            'last_name' => 'required',
            'status' => 'required',
            'type' => 'required',
            'username' => 'required',
            'email' => 'required',
            'email_confirmation' => 'required|same:email',
            'password' => 'required'
        ];
    }
}
