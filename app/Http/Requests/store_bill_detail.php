<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_bill_detail extends FormRequest
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
            'chair' => 'required|max:255',
            'departure' => 'required|max:255',
            
        ];
    }
}
