<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class PilotRatingsFormRequest extends FormRequest
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
            'Pilot_EMPNUM' => 'required',
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
        $data = $this->only(['Pilot_EMPNUM', 'Airplane_Rating_Number']);



        return $data;
    }

}