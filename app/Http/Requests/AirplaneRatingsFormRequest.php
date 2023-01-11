<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AirplaneRatingsFormRequest extends FormRequest
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
            'Name' => 'required|string|min:1|max:30',
            'Description' => 'required|string|min:1|max:80',
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
        $data = $this->only(['Name', 'Description']);



        return $data;
    }

}