<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StaffFormRequest extends FormRequest
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
            'SURNAME' => 'required|string|min:1|max:60',
            'NAME' => 'required|string|min:1|max:60',
            'ADDRESS' => 'required|string|min:1|max:150',
            'PHONE' => 'required|string|min:1|max:21',
            'SALARY' => 'required|numeric|min:0|max:99999.99',
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
        $data = $this->only(['SURNAME', 'NAME', 'ADDRESS', 'PHONE', 'SALARY']);



        return $data;
    }

}