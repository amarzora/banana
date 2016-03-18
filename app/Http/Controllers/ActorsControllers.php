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


use App\Http\Requests\ActorsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;



class ActorsControllers extends Controller{

    /*
     * Methode de controller
     * <=> Action de controller
     */

    public function favoris(Request $request,$id)
    {
        $actor = Actors::find($id);


        $tab = $request->session()->get('id_actors', []);

        if(array_key_exists($id,$tab)){
            unset($tab[$id]);
        }else {
            $tab[$id] = $actor->lastname . "  " . $actor->firstname;
        }

        $request->session()->put('id_actors', $tab);

        return Redirect::route('actors_lister');


    }


public function lister(Request $request){
    $actors = Actors::all();
    //dump($actors);
    // retourner une vue

    $id_actors = $request->session()->get('id_actors');
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

    public function enregistrer(ActorsRequest $request)
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