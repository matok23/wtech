<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        $user=$this->user();
        if($user && $user->role==='admin'){
            return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric|min:0',
            'description' => 'sometimes|nullable|string',
            'image' => 'sometimes|string',
            'manufacturer_id' => 'sometimes|exists:manufacturers,id',
            'color' => 'sometimes|string|max:255',
            'categories' => 'sometimes:array',
            'categories.*' => 'exists:categories,id',
        ];
    }
}
