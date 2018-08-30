<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 13/07/2018
 * Time: 23:02
 */

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\NewsLetterUser;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function showHome(){

        $lastArticle = Article::where("categorie_id",1)->orderBy("id","DESC")->first();

        $autreArticles = Article::where([["id","!=",$lastArticle->id]])->paginate(15);
        $rubrique4 = Article::where("categorie_id",4)->orderBy("id","DESC")->paginate(6);

        $actualite = Article::where("categorie_id",2)->paginate(3);



        return view("normal_user.pages.home")->with(
            [
                "lastArticle"=>$lastArticle,
                "autreArticles"=>$autreArticles,
                "actualites" => $actualite->items(),
                "rubrique4"=>$rubrique4
            ]
        );
    }

    public function showArticle($articleID,$articleTitle){

        $article = Article::find($articleID);

        return view("normal_user.pages.rubrique-1-item")->with(
            [
                "article"=>$article
            ]
        );
    }

    public function showAbonnementSuccess(){


        return view("");
    }

    public function showRubrique1Home(){



    }

    public function showRubrique2Home(){

        $voirAussis = Article::where("categorie_id",4)->paginate(4);

        $rubrique2LastArticle = Article::all()->last();
        $rubrique2Articles = Article::where("categorie_id",2)->paginate(6);
        
        $view = view("normal_user.pages.rubrique-2-home")->with(
            [
                "lastArticle"=>$rubrique2LastArticle,
                "articles"=>$rubrique2Articles,
                "voirAussis"=>$voirAussis
            ]
        );

        return $view;
    }


    public function showRubrique3Home(){

    }

    public function showRubrique4Home(){

    }


    public function doAbonnement(Request $request){

        $newsletter = new NewsLetterUser();
        $newsletter->email = $request->email;

        $newsletter->save();

        return redirect()->route("newsletterInscriptionSuccess");
    }

}