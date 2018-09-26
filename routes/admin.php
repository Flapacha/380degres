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
Route::get('login',"AdminViewController@showLogin")->name("adminLogin");
Route::post('login',"AdminActionController@connectAdmin")->name("actionConnectAdmin");

Route::group(
    ["middleware"=>["adminMiddleware"]],function(){

    Route::get('/',"AdminViewController@getHomeAdminPage")->name("adminHomePage");


    Route::get('post/nouveau',"AdminViewController@showNewPost")->name("adminNewPost");
    Route::get('article/edit/{articleID}',"AdminViewController@showArticleEdit")->name("showArticleEdit");
    Route::get('post/page/{page}',"AdminViewController@showArticleListe")->name("adminPostList");
    Route::get('edit/admin/info',"AdminViewController@showEditAdminInfo")->name("editAdminInfo");


    Route::post("post/nouveau","AdminActionController@newArticle")->name("actionNewArticle");
    Route::post("post/edit/{articleID}","AdminActionController@newArticle")->name("actionEditArticle");
    Route::post("update/admin/image","AdminActionController@updateAdminImage")->name("updateAdminImage");


    }
);
