<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 16/07/2018
 * Time: 22:10
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{

    protected $table="categorie";
    public $timestamps=false;

    public function newsletterUser(){

        return $this->belongsToMany(
            \App\Models\NewsLetterUser::class,
                "user_abonnement_rubrique",
            "categorie_id",
            "newsletter_id"
            );

    }

}