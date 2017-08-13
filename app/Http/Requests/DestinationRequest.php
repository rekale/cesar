<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
                'title' => 'required|max:255',
                'thumbnail_image' => 'required|image|max:5000',
                'category_id' => 'required',
                'abstract' => 'required|max:255',
                'description' => 'required',
                'location' => 'required|max:255',
                'tickets' => 'required|integer',
                'banners.*' => 'required|image|max:5000',
            ];
        } else if ($this->method() == 'PUT') {
            return [
                'title' => 'required|max:255',
                'thumbnail_image' => 'image|max:5000',
                'category_id' => 'required',
                'abstract' => 'required|max:255',
                'description' => 'required',
                'location' => 'required|max:255',
                'tickets' => 'required|integer',
                'banners.*' => 'image|max:5000',
            ];
        }

    }
}
