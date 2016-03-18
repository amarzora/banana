<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {




Route::get('/',[
    'as'=> 'homepage',
    'uses' => 'HomeControllers@homepage'
]);
/*
 * Page Contact
 * contact=>URI (bout de l'ul)
 */

Route::get('/contact', function(){
   //Retoune la vue contact
   return  view('static/contact');
});

/*
 * Page de Concept
 *
 */

Route::get('/concept', function(){
    //Retoune la vue concept
    return  view('static/concept');
});

Route::get('/apropos', function(){
    //Retoune la vue concept
    return  view('static/apropos');
});



/*Groupe de route*/

Route::group(['prefix' => 'movies'],function() {

    Route::get('/vider',[
        'as' => 'movies_vider',
        'uses' => 'MoviesControllers@vider'
    ]);

    //Route panier
    Route::get('/panier/{id}',[
        'as' => 'movies_panier',
        'uses' => 'MoviesControllers@panier'
    ]);

    Route::get('/supr/{id}',[
        'as' => 'movies_supr',
        'uses' => 'MoviesControllers@supr'
    ]);


    Route::get('/lister', [
        'as' =>'movies_lister',
        'uses' => 'MoviesControllers@lister'
    ]);

    Route::get('/creer', [
        'as'=> 'movies_creer',
        'uses' => 'MoviesControllers@creer'
    ]);


    Route::get('/editer/{id}', [
        'as'=>'movies_editer',
        'uses' => 'MoviesControllers@editer'
    ])
    -> where('id', '[0-9]+');
// where permet une restriction
    // au niveau de mon argument en URL

    Route::get('/voir/{id}', [
        'as' =>'movies_voir',
        'uses' => 'MoviesControllers@voir'
    ])
        -> where('id', '[0-9]+');

    Route::post('/enregistrer', [
        'as' =>'movies_enregistrer',
        'uses' => 'MoviesControllers@enregistrer'
    ]);

    Route::get('/supprimer/{id}',[
        'as' =>'movies_supprimer',
        'uses' =>'MoviesControllers@supprimer'
    ]);
    Route::get('/visible/{id}',[
        'as'=>'movies_visible',
        'uses' => 'MoviesControllers@visible'
    ]);

});




//categorie

Route::group(['prefix' => 'categorie'],function() {
    Route::get('/voir/{id}', [
        'uses' => 'CategoriesControllers@voir'
    ]);


    Route::get('/lister', [
        'as'=>'categorie_lister',
        'uses' => 'CategoriesControllers@lister'
    ]);


    Route::get('/creer', [
        'as'=>'categorie_creer',
        'uses' => 'CategoriesControllers@creer'
    ]);



    Route::post('/enregistrer', [
        'as'=>'categories_enregistrer',
        'uses' => 'CategoriesControllers@enregistrer'
    ]);

    /*
     * * Argument qui s'appelle id en URL
     * Argument {id}
     */

    Route::get('/editer/{id}', [
        'uses' => 'CategoriesControllers@editer'
    ]);

    Route::get('/supprimer/{id}',[

        'as' => 'categories_supprimer',
        'uses' => 'CategoriesControllers@supprimer'
     ]);


});


//Actors


Route::group(['prefix'=> 'actors'],function() {

    Route::get('/favoris/{id}',[
        'as' => 'actors_favoris',
        'uses' => 'ActorsControllers@favoris'
    ]);


    Route::get('/voir/{id}', [
        'as' => 'actors_voir',
        'uses' => 'ActorsControllers@voir'
    ]);


    Route::get('/lister', [
        'as' => 'actors_lister',
        'uses' => 'ActorsControllers@lister'
    ]);


    Route::get('/creer', [
        'as' => 'actors_creer',
        'uses' => 'ActorsControllers@creer'
    ]);


    Route::get('/editer/{id}', [
        'as' => 'actors_editer',
        'uses' => 'ActorsControllers@editer'
    ]);

    Route::get('/supprimer/{id}',[
        'as' => 'actors_supprimer',
        'uses' => 'ActorsControllers@supprimer'
    ]);

});




//directors


Route::group(['prefix'=> 'directors'],function() {

    Route::get('/voir/{$id}', [
        'as'=>'directors_voir',
        'uses' => 'DirectorsControllers@voir'
    ]);


    Route::get('/lister', [
        'as' => 'directors_lister',
        'uses' => 'DirectorsControllers@lister'
    ]);


    Route::get('/creer', [
        'as' => 'directors_creer',
        'uses' => 'DirectorsControllers@creer'
    ]);


    Route::get('/editer/{id}', [
        'as' => 'directors_editer',
        'uses' => 'DirectorsControllers@editer'
    ]);

    Route::post('/enregistrer', [
        'as' =>'directors_enregistrer',
        'uses' => 'DirectorsControllers@enregistrer'
    ]);
    Route::get('/supprimer/{id}',[
        'as' => 'dirctors_supprimer',
        'uses' => 'DirectorsControllers@supprimer'
    ]);

});



// sessions

    Route::group(['prefix' => 'sessions'],function() {
        Route::get('/voir/{id}', [
            'uses' => 'SessionsControllers@voir'
        ]);


        Route::get('/lister', [
            'as'=>'sessions_lister',
            'uses' => 'SessionsControllers@lister'
        ]);


        Route::get('/creer', [
            'as'=>'sessions_creer',
            'uses' => 'SessionsControllers@creer'
        ]);



        Route::post('/enregistrer', [
            'as'=>'sessions_enregistrer',
            'uses' => 'SessionsControllers@enregistrer'
        ]);

        /*
         * * Argument qui s'appelle id en URL
         * Argument {id}
         */

        Route::get('/editer/{id}', [
            'uses' => 'SessionsControllers@editer'
        ]);

        Route::get('/supprimer/{id}',[

            'as' => 'sessions_supprimer',
            'uses' => 'SessionsControllers@supprimer'
        ]);


    });


    // cinema

    Route::group(['prefix' => 'cinema'],function() {
        Route::get('/voir/{id}', [
            'uses' => 'CinemaControllers@voir'
        ]);


        Route::get('/lister', [
            'as'=>'cinema_lister',
            'uses' => 'CategoriesControllers@lister'
        ]);


        Route::get('/creer', [
            'as'=>'cinema_creer',
            'uses' => 'CinemaControllers@creer'
        ]);



        Route::post('/enregistrer', [
            'as'=>'cinema_enregistrer',
            'uses' => 'CinemaControllers@enregistrer'
        ]);

        /*
         * * Argument qui s'appelle id en URL
         * Argument {id}
         */

        Route::get('/editer/{id}', [
            'uses' => 'CinemaControllers@editer'
        ]);

        Route::get('/supprimer/{id}',[

            'as' => 'cinema_supprimer',
            'uses' => 'CinemaControllers@supprimer'
        ]);


    });

/*
 * Page a propos
 */
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

    //
});
