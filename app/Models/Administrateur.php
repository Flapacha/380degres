<?php
/**
 * Created by PhpStorm.
 * User: KOUADIO
 * Date: 16/07/2018
 * Time: 22:09
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Administrateur extends Model
{

    protected $fillable = ["login","nom","prenoms","password"];
    public $timestamps = false;
    protected $table= "administrateur";

    public function articles(){
        return $this->hasMany(\App\Models\Article::class,"author_id");
    }

    public function pp(){
        return $this->belongsTo(\App\Models\Image::class,"image_id","id");
    }

}