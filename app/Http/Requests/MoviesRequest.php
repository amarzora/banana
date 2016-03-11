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

class MoviesRequest extends FormRequest
{
/**
 * crration de validation par champs
 */
    public function rules(){

        return [
            'title' => 'required|min:10|regex:/^[A-Za-z0-9]+$/|unique:movies',
            'description' => 'required|min:10|max:250',
            'language' => 'required|in:fr,en,es',
            'annee' => 'required|date_format:Y|after:now',
            'budget' => 'required|integer',
            'BO' => 'required|in:Vo,vost,vostfr'

            /*
             * date_format: d/m/y
             * digits:4 on peut utilise pour les dates
             * pour after on peut choisir date exemple after:10/01/2015 n'accept pas date avant
             * before avant
             */
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     */

    public function messages()
    {
        return [

            /*
             * required parmet de grouper tout les champs
             */
            'required' => 'champs obligatoire',
            'title.required' => 'Le titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'title.min' => 'Le titre est trop court',
            'title.max' => 'Le titre est trop long',
            'description.min' => 'La description est trop courte',
            'description.max' => 'La description est trop longue',
            'title.regex' => 'le titre est mauvais format',
            'title.unique' => 'Le titre est déja pris',
            'langue.in' => '',
            'annee' => 'Le format de l année est incorect',
        ];
    }

     public function  authorize(){
         return true;

     }

}