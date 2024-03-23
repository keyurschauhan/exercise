<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $rules = [
            'name' => 'required',
            'email' => 'nullable|email',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg|dimensions:min_width=100,min_height=100',
            'website' => 'nullable|url',
        ];

        if ($this->isMethod('PUT')) {
            if ($this->route('companies')) {
                $rules['name'] .= ',' . $this->route('companies')->id;
            }
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter the company name.',
            'email.email' => 'Please enter a valid email address.',
            'logo.image' => 'The logo must be an image file.',
            'logo.mimes' => 'The logo must be a file of type: jpeg, png, jpg, gif.',
            'logo.dimensions' => 'The logo dimensions must be at least 100x100 pixels.',
            'website.url' => 'Please enter a valid website URL.',
        ];
    }
}
