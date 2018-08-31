<?php
/**
 * Created by PhpStorm.
 * User: GICOP DESIGNER 2
 * Date: 31/08/2018
 * Time: 09:53
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class ArticleTags extends Model
{

    public function article(){
        return $this->hasOne(\App\Models\Article::class,"id","article_id");
    }

    public function tag(){
        return $this->hasOne(\App\Models\Tags::class,"id","tag_id");
    }

}