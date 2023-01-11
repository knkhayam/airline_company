<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AirplanesFormRequest extends FormRequest
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
            'NUMSER' => 'required|numeric|min:0|max:4294967295',
            'Manufacturer_Model' => 'required|string|min:1|max:20',
            'Airplane_Rating_Number' => 'required|numeric|min:0|max:4294967295',
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
        $data = $this->only(['NUMSER', 'Manufacturer_Model', 'Airplane_Rating_Number']);



        return $data;
    }

}