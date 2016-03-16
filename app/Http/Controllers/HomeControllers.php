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
use App\Sessions;

class HomeControllers extends Controller{
    public function homepage(){
        $movie = new Movies();
        $nbFilm = $movie->getNbMoviesActifs();
        $nbFilmT = $movie->getNbMovies();
        $budgT = $movie->budgetTotal();
        $moyDF = $movie->moyDureeFilm();
        $fLn = $movie->calcul();
        $note = $movie->notePresse();

        $actor = new Actors();
        $nbActors = $actor->getNbActeur();
        $nbActorsF = $actor->getNbActeurFrance();
        $moyAge = $actor->moyAgeActors();

        $session = new Sessions();
        $titleCinema = $session->NomCinema();

      /*  $cinema = Sessions::find(1)->cinema;*/

        return view('static/welcome',
            [
              'nbFilm' => $nbFilm,
               'nbFilmT' =>$nbFilmT,
                'nbActors' =>$nbActors,
                'nbActorsF' => $nbActorsF,
                'moyAge' => $moyAge,
                'budgT' => $budgT,
                'moyDF' => $moyDF,
                'fLn' =>$fLn,
                'note' => $note,
                'titleCinema' => $titleCinema


            ]);



    }

}
