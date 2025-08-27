<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // default is false
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required'],
            //'sku => ['required']'
            'description' => ['required'],
            'quantity' => ['required'],
            //'price' => ['required'],
            'category' => ['required'],
        ];
    }

    function prepareForValidation() 
    {
        // $this->merge([
        //     'name' => $this->name
        // ]);
    }
}
