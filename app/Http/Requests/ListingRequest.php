<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ListingRequest extends Request
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
            'address' => 'required',
            'cross_street' => 'required',
            'square_feet' => 'required',
            'price' => 'required',
            'deposit_price' => 'required',
            'last_price' => 'required',
            'type_of_dwelling' => 'required',
            'lease' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'carport' => 'required',
            'garage' => 'required',
            'furnished' => 'required',
            'pets' => 'required',
            'features' => 'required',
            'schools' => 'required',
            'photos' => 'mimes:png',
            'map' => 'required',
            'description' => 'required',
            'owner_name' => 'required',
            'contact_number' => 'required'

        ];
    }
}

