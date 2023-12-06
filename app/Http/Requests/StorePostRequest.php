<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:10',
            'content' => 'required',
            'excerpt' => 'required|min:25'            
        ];
    }
    public function messages():array
    {
        return [
            'title.required' => 'A title is required',
            'title.min' => 'A title must be at least 10 characters',
            'content.required' => 'A content is required',
            'excerpt.required' => 'A excerpt is required',
            'excerpt.min' => 'A excerpt must be at least 25 characters'
        ];
    }
}
