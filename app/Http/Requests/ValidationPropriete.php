<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationPropriete extends FormRequest
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
            'photo1'=>'required|file|image|mimes:jpeg,png,jpg|max:2000',
            'photo2'=>'required|file|image|mimes:jpeg,png,jpg|max:2000',
            'photo3'=>'required|file|image|mimes:jpeg,png,jpg|max:2000',
            'photo4'=>'required|file|image|mimes:jpeg,png,jpg|max:2000',
            'photo5'=>'required|file|image|mimes:jpeg,png,jpg|max:2000',
            'prix'=>'required|min:1',
            'ville'=>'required|min:3',
            'com'=>'required|min:3',
            'quart'=>'required|min:3',
            'type'=>'required',
            'desc'=>'required|',
            'id_pro'=>'required',
        ];
    }
    public function messages()
    {
        return[
            'photo1.required'=>"vous devez selecteionner une photo de presentation",
            'photo1.mimes'=>"Veillez selectionner un fichier de type jpeg,png ou jpg",
            'photo1.max'=>"Veillez selectionner une image qui pèse au plus 2 Megas",
            'photo1.file'=>"vous devriez choisir un fichier",

            'photo2.file'=>"vous devriez choisir un fichier",
            'photo2.required'=>"vous devez selecteionner une photo 2",
            'photo2.mimes'=>"Veillez selectionner un fichier de type jpeg,png ou jpg",
            'photo2.max'=>"Veillez selectionner une image qui pèse au plus 2 Megas",

            'photo3.file'=>"vous devriez choisir un fichier",
            'photo3.required'=>"vous devez selecteionner une photo 3",
            'photo3.mimes'=>"Veillez selectionner un fichier de type jpeg,png ou jpg",
            'photo3.max'=>"Veillez selectionner une image qui pèse au plus 2 Megas",

            'photo4.file'=>"vous devriez choisir un fichier",
            'photo4.required'=>"vous devez selecteionner une photo 3",
            'photo4.mimes'=>"Veillez selectionner un fichier de type jpeg,png ou jpg",
            'photo4.max'=>"Veillez selectionner une image qui pèse au plus 2 Megas",

            'photo5.file'=>"vous devriez choisir un fichier",
            'photo5.required'=>"vous devez selecteionner une photo 3",
            'photo5.mimes'=>"Veillez selectionner un fichier de type jpeg,png ou jpg",
            'photo5.max'=>"Veillez selectionner une image qui pèse au plus 2 Megas",

            'prix.required'=>"Le prix est recquis",
            'ville.required'=>"La ville est recquise",
            'com.required'=>"La commune est recquise",
            'desc.required'=>"La déscription est recquise",
            'quart.required'=>"Le quartier est recquis",
            'prix.min'=>"Le prix doit avoir au moins 1 chiffre",
            'ville.min'=>"La ville doit avoir au moins 3 caractères",

            'quart.min'=>"La ville doit avoir au moins 3 caractères",
            'com.required'=>"La déscription est recquise",
            'com.min'=>"La commune doit avoir au moins 3 chiffre",

        ];

    }
}
