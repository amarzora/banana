<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 15/03/16
 * Time: 14:28
 */

namespace App\Http\Controllers;


use App\Actors;
use App\Movies;

class HomeControllers extends Controller{
    public function homepage(){
        $movie = new Movies();
        $nbFilm = $movie->getNbMoviesActifs();
        $nbFilmT = $movie->getNbMovies();

        $actor = new Actors();
        $nbActors = $actor->getNbActeur();
        $nbActorsF = $actor->getNbActeurFrance();

        $moyAge = $actor->moyAgeActors();

        return view('static/welcome',
            [
              'nbFilm' => $nbFilm,
               'nbFilmT' =>$nbFilmT,
                'nbActors' =>$nbActors,
                'nbActorsF' => $nbActorsF,
                'moyAge' => $moyAge

            ]);



    }

}
