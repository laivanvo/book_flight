<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckBookFormRequest extends FormRequest
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
        $year = date("y");
        
        return [
            'departure_airport'=>'required',
            'arrival_airport'=>'required',
            'dateDeparture'=>'required|before_or_equal:31.12.'.$year.'|after_or_equal:16.10.2021',
            'adult'=>'numeric|max:4',
            'children'=>'numeric|max:4',
        ];
    }
}
