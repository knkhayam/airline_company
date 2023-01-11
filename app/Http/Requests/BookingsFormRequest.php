<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class BookingsFormRequest extends FormRequest
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
            'Passenger_Passport_No' => 'required',
            'Schedule_Flight_FLIGHTNUM' => 'required|string|min:1|max:15',
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
        $data = $this->only(['Passenger_Passport_No', 'Schedule_Flight_FLIGHTNUM']);



        return $data;
    }

}