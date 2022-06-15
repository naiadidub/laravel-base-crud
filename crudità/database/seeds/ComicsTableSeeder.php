<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrayComics = config('comics');
        foreach ($arrayComics as $comic) {
            $nuovoComic = new Comic();
            $nuovoComic->title=$comic['title'];
            $nuovoComic->description=$comic['description'];
            $nuovoComic->thumb=$comic['thumb'];
            $nuovoComic->price=$comic['price'];
            $nuovoComic->series=$comic['series'];
            $nuovoComic->sale_date=$comic['sale_date'];
            $nuovoComic->type=$comic['type'];
            $nuovoComic->save();
        }
    }
}
