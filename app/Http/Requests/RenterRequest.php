<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RenterRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // return false;
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
            'services_in_city' => 'required',
            'preferred_bedroom' => 'required',
            'current_address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'email_confirmation' => 'required|same:email',
            'password' => 'required'
        ];
    }
}
