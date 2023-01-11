<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PassengersFormRequest extends FormRequest
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
            'Passport_No' => 'required|numeric|min:0|max:4294967295',
            'SURNAME' => 'required|string|min:1|max:30',
            'NAME' => 'required|string|min:1|max:30',
            'ADDRESS' => 'required|string|min:1|max:30',
            'PHONE' => 'required|string|min:1|max:30',
        ];

        return $rules;
    }
    
    /**
     * Get the request's data from the request.
     *
     * 
     * @return array
     */
    public function getData()
    {
        $data = $this->only(['Passport_No', 'SURNAME', 'NAME', 'ADDRESS', 'PHONE']);



        return $data;
    }

}