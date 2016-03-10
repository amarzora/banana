<?php

namespace App\Http\Controllers;

/*
Class MoviesController
@package App/Http/Controlers
chaque controller doit etre suffixer
par le mot clefs controllers et doit
heriter de ma classe Controller
*/


use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MoviesControllers extends Controller
{

    /*
     * Methode de controller
     * <=> Action de controller
     */

    public function lister()
    {

        // Récuperer tous mes films
        $movies = Movies::all();
        dump($movies);

// retourner une vue
        // transporte mes films pour ma vue
        return view("movies/list", [
            "movies" => $movies
        ]);

    }

    public function  voir($id)
    {

        $movies = Movies::find($id);

        return view("movies/voir", ["movies" => $movies]);
    }
    /*

     * Argument d'action de controller
     * argument d'action de controller
     * sont égaux
     */


    // Le transporteur transport a la vue

    public function  editer($id)
    {

        //var_dump($variable) <=> dump()
        // deboger mon id
        $movies = Movies::find($id);

        dump($id);
        $prenom = 'zora';

        return view("movies/editer", ['id' => $id, 'movies=>$movies']);
    }


    public function  creer()
    {

        return view("movies/creer");
    }

    public function enregistrer(Request $request)
    {

        // commentaire
        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;

        $movies = new Movies();
        $movies->title = $titre;
        $movies->description = $description;
        $movies->synopsis = $synopsis;
        $movies->budget = $synopsis;
        $movies->annee = $annee;

        $movies->save();

        return Redirect::route('movies_lister');


    }

    public function  supprimer($id)
    {
        $movies = Movies::find($id);
        $movies->delete();

        return Redirect::route('movies_lister');


    }

    public function visible($id)
    {


        $movies = Movies::find($id);
        if($movies->visible == 0){
                $movies->visible = 1;
        }else{
            $movies->visible = 0;
        }
        $movies->save();

        return Redirect::route('movies_lister');

    }



}