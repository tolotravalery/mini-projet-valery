<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('/ajout-formulaire', 'BackController@ajoutFormulaire');
        Route::get('/ajout-page/{formId}', 'BackController@ajoutPageDansFormulaire');
        Route::get('/ajout-reponse/{questionId}', 'BackController@ajoutReponseDansQuestion');
        Route::get('/ajout-question/form={formId}&page={pageId}', 'BackController@ajoutQuestionDansPage');
        Route::post('/soumettre-formulaire', 'BackController@soumettreFormulaire')->name('soumettre-formulaire');
        Route::post('/soumettre-page', 'BackController@soumettrePage')->name('soumettre-page');
        Route::post('/soumettre-question', 'BackController@soumettreQuestion')->name('soumettre-question');
        Route::post('/soumettre-reponse', 'BackController@soumettreReponse')->name('soumettre-reponse');
    });
});
