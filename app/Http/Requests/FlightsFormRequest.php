<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class FlightsFormRequest extends FormRequest
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
            'FLIGHTNUM' => 'required|string|min:1|max:15',
            'ORIGIN' => 'required|string|min:1|max:80',
            'DEST' => 'required|string|min:1|max:80',
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
        $data = $this->only(['FLIGHTNUM', 'ORIGIN', 'DEST']);



        return $data;
    }

}