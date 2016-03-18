<?php
/**
 * Created by PhpStorm.
 * User: machine
 * Date: 08/03/16
 * Time: 11:42
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class Movies
 * Modelise toutes mes requettes
 * concernant la table Movies
 * @package App
 */


class Movies extends  Model
{

    /**
     * Nom de ma table
     * @var string
     */
    protected $table = "movies";

    /*
     * Recupérer le nb de film actifs
     * SELECT COUNT (*)
     * FROM Movies
     * WHERE visible=1
     */

    public function getNbMoviesActifs()
    {

        // DB remplace Mysql: https://laravel.com/docs/5.0/queries#selects
        $nbFilm = DB::table('movies')
            ->where('visible', 1)
            ->count();
        return $nbFilm;
    }

    public function getNbMovies()
    {
        $nbFilmT = DB::table('movies')
            ->count();
        return $nbFilmT;
    }


    public function budgetTotal()
    {
        $budgT = DB::table('movies')
            ->sum('budget');
        return $budgT;

    }

    public function moyDureeFilm()
    {
        $mouDF = DB::table('movies')
            ->AVG('duree');
        return ROUND($mouDF);

    }

    public function calcul()
    {
        $fLn = DB::table('movies')
            ->where('languages', 'fr') ->where ('note_presse', '>', 4)
            ->count();
        return $fLn;

}

    public function notePresse(){

        $note = DB::table('movies')
            ->avg('note_presse');
            return $note;
    }


}