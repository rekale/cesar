<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if ($this->method() == 'POST') {
            return [
                'detail_name' => 'required|max:255',
                'name' => 'required|max:255',
                'image' => 'required|image|max:2000',
            ];
        } else if ($this->method() == 'PUT') {
            return [
                'detail_name' => 'required|max:255',
                'name' => 'required|max:255',
                'image' => 'image|max:2000',
            ];
        }

    }
}
