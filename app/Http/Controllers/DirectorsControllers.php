<?php

namespace App\Http\Controllers;

/*
Class MoviesController
@package App/Http/Controlers
chaque controller doit etre suffixer
par le mot clefs controllers et doit
heriter de ma classe Controller
*/


use App\Actors;
use App\Directors;

class DirectorsControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

public function lister(){
    $directors = Directors::all();
    dump($directors);
    // retourner une vue
    return view("directors/list",[
        "directors"=>$directors
    ]);
}

    public  function  voir($id){
        $directors = Directors::find($id);
        return view("directors/voir", ["directors"=>$directors]);


    }


    public  function  editer(){

        return view("directors/editer");
    }

    public  function  creer(){

        return view("directors/creer");
    }

}