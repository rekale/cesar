<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'sex' => ['required', Rule::in(['pria', 'wanita'])],
            'birthday' => 'required|date',
            'nik' => 'required|digits:16',
            'address' => 'required',
            'city' => 'required|max:255',
            'pos_code' => 'required|digits:5',
            'phone' => 'required',
            'no_rek' => 'required',
            'name_rek' => 'required|max:255',
        ];
    }
}
