<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VillaPostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ['required'],
            "summary" => ['required'],
            "description" => ['required'],
            "price" => ['required', 'numeric'],
            'path' => ['required', 'mimes:jpeg,jpg,png', 'max:1024'],
            'facility' => ['required'],
            'facility.*' => ['mimes:jpeg,jpg,png', 'max:1024']
        ];

        
    }

    public function messages()
    {
        return [
            'name.required' => "Name is required",
            'summary.required' => "Summary is required",
            'description.required' => "Description is required",
            'price.required' => "Price is required",
            'price.numeric' => "Price must be in numbers",
            'path.required' => "Path are required",
            'path.max' => "Path images must be not greater than 1024 kb",
            'path.mimes' => "Path images can only be in jpg/jpeg/png",
            'facility.required' => "Facility are required",
            'facility.*.max' => "Facility images must be not greater than 1024 kb",
            'facility.*.mimes' => "Facility images can only be in jpg/jpeg/png",
        ];

    }
}
