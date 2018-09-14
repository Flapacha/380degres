<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create("administrateur",function(Blueprint $table){

            $table->increments("id");
            $table->string("login");
            $table->string("nom");
            $table->string("prenoms");
            $table->string("password");
            $table->integer("image_id")->nullable();

        });

        Schema::create("newsletter_user", function(Blueprint $table){

            $table->increments("id");
            $table->string("email");

            $table->string("nom")->nullable();
            $table->string("prenoms")->nullable();

            $table->timestamps();

        });

        Schema::create("user_abonnement_rubrique",function(Blueprint $table){

            $table->increments('id');
            $table->integer('categorie_id');
            $table->integer('newsletter_id');

        });

        Schema::create("article",function(Blueprint $table){

            $table->increments("id");

            $table->string("title");
            $table->string("sous_title");
            $table->text("article_content");

            $table->integer("header_image_id")->nullable();

            $table->integer("author_id")->nullable();

            $table->integer("categorie_id")->nullable();

            $table->timestamps();

        });

        Schema::create("categorie",function(Blueprint $table){

            $table->increments("id");
            $table->string("libelle");

        });

        Schema::create("images",function(Blueprint $table){

            $table->increments("id");

            $table->string("path");
            $table->timestamps();

        });

        Schema::create("tags",function(Blueprint $table){

            $table->increments("id");
            $table->string("libelle");
            $table->timestamps();

        });

        Schema::create("article_tags",function(Blueprint $table){

            $table->increments("id");
            $table->integer("article_id");
            $table->integer("tag_id");
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
