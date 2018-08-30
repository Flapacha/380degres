<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use App\Models\Article;
use App\Models\Image;
use App\Models\NewsLetterUser;
use Illuminate\Http\Request;

class AdminActionController extends Controller
{
    //
    public function newArticle(Request $request){

        $image = $this->saveArticleHeaderImage($request);

        $article = new Article();

        $article->title = $request->titre;
        $article->sous_title = $request->sousTitre;
        $article->categorie_id = $request->categorie;
        $article->article_content = htmlspecialchars($request->get("content"));
        $article->header_image_id = $image->id;
        $article->author_id = 1;

        $article->save();

        return redirect()->route("adminPostList",["page"=>1]);
    }

    public function editArticle(Request $request,$articleID){

        $image = $this->saveArticleHeaderImage($request);

        $article = Article::find($articleID);



        $article->title = $request->titre;
        $article->sous_title = $request->sousTitre;
        $article->categorie_id = $request->categorie;
        $article->article_content = htmlspecialchars($request->get("content"));
        $article->header_image_id = $image->id;
        $article->author_id = 1;

        $article->update();

        return redirect()->route("adminPostList",["page"=>1]);
    }

    private function saveArticleHeaderImage(Request $request){

        $uploadedImage = $request->file("article_image_header");

        $url = $uploadedImage->store("/headers/images","real_public");

        $image = new Image();

        $image->path = $url;
        $image->save();

        return $image;
    }

    public function connectAdmin(Request $request){

        $admin = Administrateur::where(

        [
            ["login",$request->login],
            ["password",$request->password]
        ]

        )->first();

        dump($admin);

        if($admin==null){

            \Session::flash("errorr",1);

            return redirect()->back()->with("error",1);
        }

        else{


            session(["admin"=>$admin->id]);
        }

    }

}
