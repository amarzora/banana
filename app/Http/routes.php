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


Route::get('/',['as'=>'static_welcome', function () {
    return view('static/welcome');
}]);
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


    Route::get('/lister', [
        'as' =>'movies_lister',
        'uses' => 'MoviesControllers@lister'
    ]);

    Route::get('/creer', [
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

    Route::get('/voir', [

        'uses' => 'ActorsControllers@voir'
    ]);


    Route::get('/lister', [
        'as' => 'actors_lister',
        'uses' => 'ActorsControllers@lister'
    ]);


    Route::get('/creer', [
        'uses' => 'ActorsControllers@creer'
    ]);


    Route::get('/editer', [
        'uses' => 'ActorsControllers@editer'
    ]);

});




//directors


Route::group(['prefix'=> 'directors'],function() {

    Route::get('/voir/{$id}', [

        'uses' => 'DirectorsControllers@voir'
    ]);


    Route::get('/lister', [
        'as' => 'directors_lister',
        'uses' => 'DirectorsControllers@lister'
    ]);


    Route::get('/creer', [
        'uses' => 'DirectorsControllers@creer'
    ]);


    Route::get('/editer', [
        'uses' => 'DirectorsControllers@editer'
    ]);

    Route::post('/enregistrer', [
        'as' =>'actors_enregistrer',
        'uses' => 'ActorsControllers@enregistrer'
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
