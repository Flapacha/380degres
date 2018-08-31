<?php

use Faker\Generator as Faker;

function read_content($filename){

    $handler1 = fopen(base_path($filename),"r");
    $html = fread($handler1,filesize(base_path($filename)));

    return $html;
}

$factory->define(\App\Models\Administrateur::class, function (Faker $faker) {
    return [

        "login" => $faker->name(),
        "nom" => $faker->name(),
        "prenoms" => $faker->name(),
        "password" => $faker->password(4,4),

    ];
});

$factory->define(\App\Models\Tags::class, function(Faker $faker){

    return [

        "libelle"=>$faker->randomElement(["musique","chanson","vie","bienEtre","malEtre","marketing","sexualité","maladie","culinaire"])

    ];

});

$factory->define(\App\Models\Article::class,function(Faker $faker){

    $htmlArray = [];

    $htmlArray[] = read_content("tests\\fake_html\\1.html");
    $htmlArray[] = read_content("tests\\fake_html\\2.html");
    $htmlArray[] = read_content("tests\\fake_html\\3.html");
    $htmlArray[] = read_content("tests\\fake_html\\4.html");
    $htmlArray[] = read_content("tests\\fake_html\\5.html");
    $htmlArray[] = read_content("tests\\fake_html\\6.html");
    $htmlArray[] = read_content("tests\\fake_html\\7.html");


    return [

        "title" => $faker->title(),
        "sous_title" => $faker->title(),
        "article_content"=>htmlspecialchars($faker->randomElement(
            $htmlArray
        )),
//        "article_content"=> "JAVENCHI DE GUCCI HUMMMMph",

    ];

});


$factory->define(\App\Models\NewsLetterUser::class,function(Faker $faker){

    return [

        "email" => $faker->email,
        "nom" => $faker->name(),
        "prenoms" => $faker->name(),

    ];

});

$factory->define(\App\Models\Categorie::class,function(Faker $faker){

    return [

        "libelle" => $faker->title()

    ];

});

$factory->define(\App\Models\Image::class,function(Faker $faker){

    return [
      "path" => $faker->randomElement([
        "/tests/abidjan.jpg",
        "/tests/abidjan.png",
        "/tests/slider-item.jpg",
        "/tests/student.jpg",
      ])
    ];

});



