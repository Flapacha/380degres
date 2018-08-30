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
use Illuminate\Http\Request;

class AdminViewController extends Controller
{

    public function getHomeAdminPage(){
        return view("admin.pages.home");
    }

    public function showNewPost(){

        $article = new Article();
        $categories = Categorie::all();

        return view("admin.pages.new_items.new_post")->with(["article"=>$article,"categories"=>$categories,"edit"=>false]);
    }

    public function showArticleEdit($articleID){

        $article = Article::find($articleID);
        $categories = Categorie::all();

        return view("admin.pages.new_items.new_post")->with(["article"=>$article,"categories"=>$categories,"edit"=>true]);
    }

    public function showLogin(Request $request){


        return view("admin.pages.connexion");
    }


    public function showArticleListe(){

//        $article = Article::paginate(15);
        $article = Article::orderBy('id','DESC')->paginate(15);

        return view("admin.pages.list_items.post_items")->withArticles($article);
    }

}