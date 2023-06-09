<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlantRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|integer',
            'image' => 'required|string',
            'category_id' => 'required|integer',
            'user_id' => 'required|integer',
            
        ];
    }
}
