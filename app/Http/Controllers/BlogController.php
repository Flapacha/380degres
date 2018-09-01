<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 13/07/2018
 * Time: 23:02
 */

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\ArticleTags;
use App\Models\Categorie;
use App\Models\NewsLetterUser;
use App\Models\Tags;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function showHome(){

        $lastArticle = Article::where("categorie_id",1)->orderBy("id","DESC")->first();

        $autreArticles = Article::where([["id","!=",$lastArticle->id]])->paginate(8);
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

        $voirAussis = $article->relatedArticle(3);


        return view("normal_user.pages.rubrique-1-item")->with(
            [
                "article"=>$article,
                "voirAussis"=>$voirAussis
            ]
        );
    }

    public function showAbonnementSuccess(){
        return view("normal_user.pages.success_abonnement");
    }

    public function showRubrique1Home(){

        request()->request->add(["categorieID"=>1]);

        $voirAussis = Article::where("categorie_id","!=",1)->paginate(4);

        $rubrique2LastArticle = Article::all()->last();


        $rubrique2Article = Article::where(function($where) use($rubrique2LastArticle){



        });

        $rubrique2Articles = Article::where("categorie_id",1)->paginate(8);

        $view = view("normal_user.pages.rubrique-2-home")->with(
            [
                "lastArticle"=>$rubrique2LastArticle,
                "articles"=>$rubrique2Articles,
                "voirAussis"=>$voirAussis,
                "rubrique2"=>$rubrique2Articles,
                "articleIndex"=>0,
                "rubrique"=>Categorie::find(1)
            ]
        );

        return $view;
    }

    public function showRubrique2Home(){

        request()->request->add(["categorieID"=>2]);


        $voirAussis = Article::where("categorie_id","!=",2)->paginate(4);

        $rubrique2LastArticle = Article::all()->last();


        $rubrique2Article = Article::where(function($where) use($rubrique2LastArticle){



        });

        $rubrique2Articles = Article::where("categorie_id",2)->paginate(8);

        $view = view("normal_user.pages.rubrique-2-home")->with(
            [
                "lastArticle"=>$rubrique2LastArticle,
                "articles"=>$rubrique2Articles,
                "voirAussis"=>$voirAussis,
                "rubrique2"=>$rubrique2Articles,
                "articleIndex"=>0,
                "rubrique"=>Categorie::find(2)
            ]
        );

        return $view;
    }

    public function showRubrique3Home(){

        request()->request->add(["categorieID"=>3]);


        $voirAussis = Article::where("categorie_id","!=",3)->paginate(4);

        $rubrique2LastArticle = Article::all()->last();


        $rubrique2Article = Article::where(function($where) use($rubrique2LastArticle){



        });

        $rubrique2Articles = Article::where("categorie_id",3)->paginate(8);

        $view = view("normal_user.pages.rubrique-2-home")->with(
            [
                "lastArticle"=>$rubrique2LastArticle,
                "articles"=>$rubrique2Articles,
                "voirAussis"=>$voirAussis,
                "rubrique2"=>$rubrique2Articles,
                "articleIndex"=>0,
                "rubrique"=>Categorie::find(3)
            ]
        );

        return $view;
    }

    public function showTagList($tagID){

        $tags = ArticleTags::where("tag_id",$tagID)->paginate(7);

        $otherTags = Tags::where("id","!=",$tagID)->paginate(7);


        return view("normal_user.pages.tags_articles")->withTags($tags)->withTag(Tags::find($tagID))->with("otherTags",$otherTags);
    }

    public function showAuthorDetailAndArticle(){


        return view("normal_user.pages.author_articles");
    }


    public function showRubrique4Home(){

        request()->request->add(["categorieID"=>4]);


        $voirAussis = Article::where("categorie_id","!=","4")->paginate(4);

        $rubrique2LastArticle = Article::all()->last();


        $rubrique2Article = Article::where(function($where) use($rubrique2LastArticle){



        });

        $rubrique2Articles = Article::where("categorie_id",4)->paginate(8);

        $view = view("normal_user.pages.rubrique-2-home")->with(
            [
                "lastArticle"=>$rubrique2LastArticle,
                "articles"=>$rubrique2Articles,
                "voirAussis"=>$voirAussis,
                "rubrique2"=>$rubrique2Articles,
                "articleIndex"=>0,
                "rubrique"=>Categorie::find(4)
            ]
        );

        return $view;
    }

    public function doAbonnement(Request $request){

        $newsletter = new NewsLetterUser();
        $newsletter->email = $request->email;

        $newsletter->save();

        return redirect()->route("newsletterInscriptionSuccess");
    }




}