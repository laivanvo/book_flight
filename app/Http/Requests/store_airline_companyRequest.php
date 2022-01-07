<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_airline_companyRequest extends FormRequest
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
            'name_airline_company' => 'required|max:255'
        ];
    }
}
