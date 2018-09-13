<?php

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

//Route::get('/', function(){
//    return "en maintenance";
//});

//Route::get('/home', "BlogController@showHome");
Route::get('/', "BlogController@showHome")->name("home");

Route::get('/article/{articleID}/{articleTitle}', "BlogController@showArticle")->name("articleDetail");

Route::get('/test', "BlogController@showHome");

Route::get("/newsletter/success","BlogController@showAbonnementSuccess")->name("newsletterInscriptionSuccess");
Route::get("/tags/{tagID}",'BlogController@showTagList')->name("tagList");

Route::get('/rubrique1',"BlogController@showRubrique1Home")->name("rubrique1Home");
Route::get('/rubrique2',"BlogController@showRubrique2Home")->name("rubrique2Home");
Route::get('/rubrique3',"BlogController@showRubrique3Home")->name("rubrique3Home");
Route::get('/rubrique4',"BlogController@showRubrique4Home")->name("rubrique4Home");

Route::get('author/{authorID}/{authorName}','BlogController@showAuthorDetailAndArticle')->name("authorDetailAndArticle");

Route::get("/abonnement/succes","BlogController@showAbonnementSuccess")->name("abonnementSuccess");

Route::post("/abonnement","BlogController@doAbonnement")->name('actionAbonnement');
Route::post("/abonnement/finish","BlogController@finishAbonnement")->name('actionFinishAbonnement');

//Route::post("/abonnement/choix","BlogController@showAbonnementChooseRubrique")->name('actionAbonnement');



