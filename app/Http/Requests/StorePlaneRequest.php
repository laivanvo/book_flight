<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlaneRequest extends FormRequest
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
            'flight_id' => 'required|max:255',
            'airline_company_id' => 'required|max:255',
            'name_plane' => 'required|max:255',
            'category_id' => 'required|max:255',
            'status' => 'required|max:255',
            'detail' => 'required|max:255',
            'price' => 'required|max:255',
            'image' => 'required|max:255',
            'chair' => 'required|max:255',
            'chair_full' => 'required|max:255',
        ];
    }
}
