<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(
    ["middleware" => [



    ]
],function(){

    Route::get("inscription","ApiUserManagement@doUserInscription");
    Route::post("connexion","ApiUserManagement@doConnexion");

    Route::post("do/commande","ApiCommandeManagement@doCommande");

    Route::get("do/resendValidationCode","ApiCommandeManagement@resendValidationCode");

    Route::get("do/anulation/commande","ApiCommandeManagement@doAnnulationCommande");
    Route::get("get/user/commandeList","ApiCommandeManagement@getUserCommandList");




});
