<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PurchaseRequest extends FormRequest
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
            'destination_id' => 'integer|required',
            'user_id' => 'integer|required',
            'tickets' => 'required|integer',
            'total' => 'required|integer',
            'proof' => 'image|max:2000',
            'confirmed' => 'boolean',
        ];
    }
}
