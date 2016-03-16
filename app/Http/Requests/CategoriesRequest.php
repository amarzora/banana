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

class CategoriesRequest extends FormRequest
{
/**
 * crration de validation par champs
 */
    public function rules(){

        return [
            'title' => 'required|min:10|',
            'description' => 'required|min:10|max:250',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     */

    public function messages()
    {
        return [
            'title.required' => 'Le titre est obligatoire',
            'description.required' => 'La description est obligatoire',
            'title.min' => 'Le titre est trop court',
            'title.max' => 'Le titre est trop long',
            'description.min' => 'La description est trop courte',
            'description.max' => 'La description est trop longue',

        ];
    }

     public function  authorize(){
         return true;

     }

}