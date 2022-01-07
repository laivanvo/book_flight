<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_bill extends FormRequest
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
            'user_id' => 'required|max:255',
            'total_money' => 'required|max:255',
            
        ];
    }
}
