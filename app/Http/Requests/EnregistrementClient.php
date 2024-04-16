<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnregistrementClient extends FormRequest
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
            'nom'=>'required|min:2|max:30',
            'postnom'=>'required|min:2|max:30',
            'email'=>'required|email',
            'telephone'=>'required|min:10|max:13',
            'mdp'=>'required|min:4',
            'cmdp'=>'required|min:4',
        ];
    }
public function messages()
{
    return [
             'nom.required'=>'Le nom est requis',
            'postnom.required'=>'Le postnom est requis',
            'email.required'=>'L\'adresse mail est requise',
            'telephone.required'=>'Le numéro de téléphone est requis',
            'mdp.required'=>'Le mot de passe est requis',
            'cmdp.required'=>'La confirmation du mot de passe est requise',

            'nom.min'=>'Le nom doit avoir au moins 2 caractères',
            'postnom.min'=>'Le postnom doit avoir au moins 2 caractères',
            'telephone.min'=>'Le numéro de téléphone doit avoir au moins 10 chiffres',
            'mdp.min'=>'Le mot de passe doit avoir au moins 4 caractères',
            'cmdp.min'=>'La confirmation du mot de passe doit avoir au moins 4 caractères ',

            'nom.max'=>'Le nom doit avoir au olus 30 caractères',
            'postnom.max'=>'Le postnom doit avoir au olus 30 caractères',
            'telephone.max'=>'Le numéro de téléphone doit avoir au olus 13 caractères',
    ];
 }
}
