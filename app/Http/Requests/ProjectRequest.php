<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name' => 'required|min:6',
            'description' => 'required|between:6,500',
        ];
    }

    public function messages(){
        return[
            'name.required' => "le nom du projet est obligatoire!",
            'name.min' => "le nom du projet doit faire au minimum 6 caracteres!",
            'description.required' => "la description du projet est obligatoire!",
            'description.between' => "le description du projet doit faire entre 6 et 500 caracteres!",
        ];
    }
}
