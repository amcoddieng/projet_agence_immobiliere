<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProprieteFormRequest extends FormRequest
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
            'titre' => 'required|string|max:255',
            'pieces' => 'nullable|integer|min:0',
            'type' => 'nullable | string ',
            'salon' => 'nullable|integer|min:0',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'cycle' => 'nullable|string',
            'region' => 'nullable|string|max:255',
            'departement' => 'nullable|string|max:255',
            'ville' => 'nullable|string|max:255',
            'adresse' => 'nullable|string|max:255',
            'disponible' => 'nullable|boolean',
            'personne_id' => 'required|exists:personnes,id',

            // Validation pour les images
            'images' => 'nullable|array', // Nous permet de recevoir un tableau de fichiers
            // 'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Chaque fichier doit être une image et respecter la taille max de 2MB
                    
        ];
    }
}
