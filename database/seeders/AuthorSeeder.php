<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $authors = [
            [
                'name' =>'Author 1',
                'photo' => 'images/authors/1.png',
                'birth_date' => '1967-10-24'
            ],
            [
                'name' =>'Author 2',
                'photo' => 'images/authors/2.png',
                'birth_date' => '1922-7-26'
            ],
            [
                'name' =>'Author 3',
                'photo' => 'images/authors/3.png',
                'birth_date' => '1976-1-20'
            ],
        ];
        DB::table('authors')->insert($authors);
    }
}
