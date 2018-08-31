<?php

use App\Models\ArticleTags;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        factory(\App\Models\Administrateur::class,8)->create()->each( function(admin));

        $faker = new Faker();
        $provider = new \Faker\Provider\Base($faker);
        $faker->addProvider($provider);



        $administrateurs = factory(\App\Models\Administrateur::class,8)->create();
        $images = factory(\App\Models\Image::class,40)->create();
        $articles = factory(App\Models\Article::class,100)->create();
        $categories = factory(\App\Models\Categorie::class,4)->create();
        $userNewsletter = factory(\App\Models\NewsLetterUser::class,50)->create();

        $tags = factory(\App\Models\Tags::class,8)->create();


        $administrateurs->each(function(\App\Models\Administrateur $administrateur) use ($images,$faker) {

            $administrateur->image_id = $faker->numberBetween(1,8);

        });

        $articles->each(function(\App\Models\Article $article) use ($tags, $categories, $images, $administrateurs, $faker) {

            $article->update(
                [
                    "author_id" => $faker->randomElement($this->toArray($administrateurs))->id,
                    "categorie_id" => $faker->randomElement($this->toArray($categories))->id,
                    "header_image_id" => $faker->randomElement($this->toArray($images))->id
                ]
            );

            $articleTags = new ArticleTags();
            $articleTags->article_id = $article->id;
            $articleTags->tag_id = $faker->randomElement($this->toArray($tags))->id;
            $articleTags->save();

            $articleTags = new ArticleTags();
            $articleTags->article_id = $article->id;
            $articleTags->tag_id = $faker->randomElement($this->toArray($tags))->id;
            $articleTags->save();


        });




    }

    private function toArray(\Illuminate\Database\Eloquent\Collection $collection){

        $array = array();

        $collection->map(function($item) use(&$array){

//            dd($item);
            $array[] = $item;

        });

//        dd($array);

        return $array;
    }


}
