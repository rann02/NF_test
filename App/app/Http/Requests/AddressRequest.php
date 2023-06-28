<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomertRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'address' => ['required'],
            'detail' => ['required'],
            'phone_number' => ['required'],
            'pos_code' => ['required'],
            'customer_id' => ['required']
        ];
    }
}