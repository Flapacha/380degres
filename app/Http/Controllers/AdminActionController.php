<?php

namespace App\Http\Controllers;

use App\Mail\NewsletterMail;
use App\Models\Administrateur;
use App\Models\Article;
use App\Models\Image;
use App\Models\NewsLetterUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

        $this->sendNewsletterMail($article);

        return redirect()->route("adminPostList",["page"=>1]);
    }

    public function sendNewsletterMail(Article $article){

        $categorie = $article->categorie;

        $categorie->newsletterUser->each(function($item) use ($article) {

            dump($item);

            $mail = new NewsletterMail($article,$item);

            Mail::to($item->email)->send($mail);

        });

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

    public function updateAdminImage(Request $request){

//        dd($request->all());

        $uploadedImage = $request->file("file");

        $url = $uploadedImage->store("/admin/images","real_public");

        $image = new Image();

        $image->path = $url;
        $image->save();

        $admin = $request->admin;

        $admin->image_id = $image->id;
        $admin->save();

    }

    public function connectAdmin(Request $request){

        $admin = Administrateur::where(

        [
            ["login",$request->login],
            ["password",$request->password]
        ]

        )->first();


        if($admin==null){

            \Session::flash("errorr",1);

            return redirect()->back()->with("error",1);
        }

        else{
            session(["admin"=>$admin->id]);
            return redirect()->route("adminHomePage");
        }

    }

}
