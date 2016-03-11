<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 10/03/16
 * Time: 16:51
 */

namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CategoriesRequest
 * @package App\Http\Requests
 * @package App\Http\Requests
 */

class ActorsRequest extends FormRequest
{
/**
 * crration de validation par champs
 */
    public function rules(){

        return [
            'firstname' => 'required|min:10',
            'lastname' => 'required|min:10|max:250',
            'image' => 'mimes :jpeg,bmp,png',

        ];
    }

    /**
     * Personnalise chaque message d'erreur
     */

    public function messages()
    {
        return [
            'firstname.required' => 'Nom est obligatoire',
            'lastname.required' => 'Prenom est obligatoire',
            'firstname.min' => 'Nom est trop court',
            'firsname.max' => 'Prenom est trop long',
            'lastname.min' => 'La description est trop courte',
            'lastname.max' => 'La description est trop longue',
            'image.mimes' => 'image non valide',

        ];
    }

     public function  authorize(){
         return true;

     }

}