<?php

namespace App\Http\Controllers;

/*
Class MoviesController
@package App/Http/Controlers
chaque controller doit etre suffixer
par le mot clefs controllers et doit
heriter de ma classe Controller
*/


use App\Http\Requests\MoviesRequest;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class MoviesControllers extends Controller
{

    /*
     * Methode de controller
     * <=> Action de controller
     */

    public function panier(Request $request,$id){
    $movie = Movies::find($id);

        //dd($movie);
        // 1. energistrer en session l'id
        // Requette gait appel à la session
        //a base d'une clef : 'id_movie'
        ////et d'une valeur : $id

        // get( je recupere en session mon tableau
        //par sa clef 'id_movies'
        //si mon tavbleau n'existe pasen session
        //j'initialise un tableau vide

        $tab = $request->session()->get('id_movies', []);

        if(array_key_exists($id,$tab)){
            unset($tab[$id]);
        }else{
            $tab[$id]= $movie->title;
        }

        // put ajoute un id dans mon tableau de movies

        $request->session()->put('id_movies',$tab);




        //2. eneregister en sessioin l'id
        return Redirect::route('movies_lister');

        //3. redicréer la liste des film


}


    public function vider(Request $request){
//


        $request->session()->forget('id_movies');


        return Redirect::route('movies_lister');


    }

    public function supr(Request $request, $id){

        $tab = $request->session()->get('id_movies', []);

        unset($tab[$id]);


         $request->session()->put('id_movies', $tab);

        return Redirect::route('movies_lister');
    }





    public function lister(Request $request)
    {

        $movies = Movies::all();

        //$request->session() accéder à la qession
        //get() est une fonction pour recuperer des données
        // a partir de la clef mis en session
        $id_movies = $request->session()->get('id_movies');
       // dump($id_movies);
        // Récuperer tous mes films

       // dump($movies);

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

        /*
         * // deboger mon id
         * var_dump($variable) <=> dump()
         */




       // dump($id);
        //$prenom = 'zora';

        $movies = Movies::find($id);
        return view("movies/editer", ['id' => $id, 'movies=>$movies']);
    }


    public function  creer()
    {

        return view("movies/creer");
    }

    public function enregistrer(MoviesRequest $request)
    {

        // commentaire
        $titre = $request->title;
        $description = $request->description;
        $synopsis = $request->synopsis;
        $budget = $request->budget;
        $annee = $request->annee;
        $language =$request->language;

        $movies = new Movies();
        $movies->title = $titre;
        $movies->description = $description;
        $movies->synopsis = $synopsis;
        $movies->budget = $budget;
        $movies->annee = $annee;
        $movies->language =$language;
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