<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function messages(){
        return [
            'title.required' => 'Sarlavha yozish majburiy',
            'short_content.required' => 'Qisqacha mazmunini yozish majburiy',
            'content.required' => 'Maqolani yozish majburiy',
        ];
    }
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
            'title' => 'required|max:255',
            'short_content' => 'required',
            'content' => 'required',
            'photo' => 'nullable|image|max:4096'
        ];
    }
}
