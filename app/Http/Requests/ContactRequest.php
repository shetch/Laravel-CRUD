<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'firstname' => 'required|min:3|max:32',
            'lastname' => 'required|min:3|max:32',
            'dob' => 'required|min:10|max:10',
            'gender' => 'required|max:10',
            'telephone' => 'required|min:11|max:12',
            'address1' => 'required',
            'address2' => '',
            'city' => 'required',
            'county' => 'required',
            'postcode' => 'required',
        ];
    }
}
