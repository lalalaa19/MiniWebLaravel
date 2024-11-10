<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $books = [
            [
                'name'=>'Laskar Pelangi',
                'photo'=>'images/books/1.jpg',
                'description'=>'description book 1',
                'publish_date'=>'2010-10-2',
                'author_id'=>1,
                'genre_id'=>1
            ],
            [
                'name'=>'Kerikil-Kerikil Tajam dan yang Terampas dan yang Putus',
                'photo'=>'images/books/2.jpg',
                'description'=>'description book 2',
                'publish_date'=>'2010-12-9',
                'author_id'=>2,
                'genre_id'=>2
            ]
        ]
    }
}
