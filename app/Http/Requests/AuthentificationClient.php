<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthentificationClient extends FormRequest
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
            'email'=>'required|email',
            'mdp'=>'required|min:4'
        ];
    }
    public function messages()
    {
        return [
            'email.required'=>'l\'adresse mail est réquise',
            'mdp.required'=>'le mot de passe est requis',
            'mdp.min'=>'le mot de passe doit avoir au moins 4 caractères'
        ];
    }
}
