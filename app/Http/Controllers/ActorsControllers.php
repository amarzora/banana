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


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class ActorsControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

public function lister(){
    $actors = Actors::all();
    dump($actors);
    // retourner une vue
    return view("actors/list",[
        "actors"=>$actors
    ]);
}

    public  function  voir(){

    return view("actors/voir");
    }


    public  function  editer(){

        return view("actors/editer");
    }

    public  function  creer(){

        return view("actors/creer");
    }

    public function enregistrer(Request $request)
    {

        $firstname = $request->firstanme;
        $lastname = $request->lastname;
        $biography = $request->biography;
        $city = $request->city;
        $image = $request->image;

        $actors = new Actors();
        $actors->firstname = $firstname;
        $actors->lastname = $lastname;
        $actors->biography = $biography;
        $actors->city = $city;
        $actors->image = $image;

        $actors->save();

        return Redirect::route('actors_lister');

    }

}