<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 16/07/2018
 * Time: 22:10
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $table="article";

    public function headerImage(){
        return $this->belongsTo(\App\Models\Image::class,"header_image_id");
    }

    public function author(){
        return $this->belongsTo(\App\Models\Administrateur::class,"author_id");
    }

    public function categorie(){
        return $this->belongsTo(\App\Models\Categorie::class,"categorie_id");
    }

}