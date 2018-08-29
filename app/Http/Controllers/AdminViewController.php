<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 10/07/2018
 * Time: 22:19
 */

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\Categorie;

class AdminViewController extends Controller
{

    public function getHomeAdminPage(){
        return view("admin.pages.home");
    }

    public function showNewPost(){

        $categories = Categorie::all();

        return view("admin.pages.new_items.new_post")->with(["categories"=>$categories]);
    }


    public function showArticleListe(){

        $article = Article::paginate(15);

        return view("admin.pages.list_items.post_items")->withArticles($article);
    }

}