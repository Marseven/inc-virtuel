<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormateurRequest extends FormRequest
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
            'nom' => 'required|max:60',
            'prenom' => 'required|max:60',
            'email' => "required|email",
            'adresse' => 'required|max:60',
            'ville' => 'required|max:60',
            'pays' => 'required|max:60',
            'nationalite' => 'required|max:60',
            'grade' => 'required|max:60',
            'specialite' => 'required|max:60'
        ];
    }
}
