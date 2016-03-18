<?php

namespace App\Http\Controllers;

/*
Class MoviesController
@package App/Http/Controlers
chaque controller doit etre suffixer
par le mot clefs controllers et doit
heriter de ma classe Controller
*/





use App\Cinema;




class CinemaControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

public function lister(){
    $cinema = Cinema::all();

    return view("cinema/list",[
        "cinema"=>$cinema
    ]);
}

    public  function  voir(){

    return view("cinema/voir");
    }


    public  function  editer(){

        return view("cinema/editer");
    }

    public  function  creer(){

        return view("cinema/creer");
    }




}