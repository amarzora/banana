<?php

namespace App\Http\Controllers;

/*
Class MoviesController
@package App/Http/Controlers
chaque controller doit etre suffixer
par le mot clefs controllers et doit
heriter de ma classe Controller
*/


use App\Categories;
use App\Http\Requests\CategoriesRequest;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoriesControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

public function lister(){

    // retourner une vue
    $categorie = Categories::all();
    dump($categorie);

    return view("categorie/list", [
        "categories" => $categorie
    ]);
}

    public  function  voir(){

    return view("categorie/voir");
    }

    public  function  editer($id){

        return view("categorie/editer",['id' =>$id]);
    }


    public  function creer (){


        return view("categorie/creer");
    }


    /**
     * Enregistrer un film en base données
     * depuis mes données soumises en formulaire
     */
    public  function enregistrer(CategoriesRequest $request)
    {

        $titre = $request->title; //title est le name de mon champs
        //$request->title<=>$_POST['title']
        $description = $request->description;  //$POST['descriptoion']

        // 2eme etape : creation en base de donnée du nouveau film
        $categories = new Categories();
        $categories->title = $titre;
        $categories->description = $description;
        $categories->save();
        //save() permet de sauvegarder mon obj en bod

        //3eme etape: redirection...
        //redirection à partir de ma route
        return Redirect::route('categorie_lister');

    }
    public function supprimer($id){

        $categories = Categories::find($id);
        $categories-> delete();

        return Redirect::route('categorie_lister');

        }


}