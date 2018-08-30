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

Route::get('/', "BlogController@showHome");
Route::get('/article/{articleID}/{articleTitle}', "BlogController@showArticle");
Route::get('/test', "BlogController@showHome");

Route::get("/newsletter/success","BlogController@showAbonnementSuccess")->name("newsletterInscriptionSuccess");

Route::get('/rubrique2',"BlogController@showRubrique2Home")->name("rubrique2Home");
Route::get('/rubrique3',"BlogController@showRubrique3Home")->name("rubrique3Home");
Route::get('/rubrique4',"BlogController@showRubrique4Home")->name("rubrique4Home");

Route::post("/abonnement","BlogController@doAbonnement")->name('actionAbonnement');


