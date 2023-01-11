<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class SchedulesFormRequest extends FormRequest
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
            'Flight_FLIGHTNUM' => 'required|string|min:1|max:15',
            'Date' => 'required|date_format:Y-m-d',
            'DEP_TIME' => 'required|string|min:1',
            'ARR_TIME' => 'required|string|min:1',
            'Airplane_NUMSER' => 'required',
            'Pilot_EMPNUM' => 'required',
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
        $data = $this->only(['Flight_FLIGHTNUM', 'Date', 'DEP_TIME', 'ARR_TIME', 'Airplane_NUMSER', 'Pilot_EMPNUM']);



        return $data;
    }

}