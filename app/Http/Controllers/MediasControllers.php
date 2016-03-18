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




class MediasControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

public function lister(){
    $medias = Medias::all();

    return view("medias/list",[
        "medias"=>$medias
    ]);
}

    public  function  voir(){

    return view("medias/voir");
    }


    public  function  editer(){

        return view("medias/editer");
    }

    public  function  creer(){

        return view("medias/creer");
    }




}