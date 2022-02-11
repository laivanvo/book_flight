<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePassengerRequest extends FormRequest
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
            'bill_id' => 'required|max:255',
            'name_passenger' => 'required|email|max:255',
            'CMND' => 'required|max:255',
            'phone' => 'required|max:255',
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
            'nationality' => 'required|max:255',
        ];
    }
}
