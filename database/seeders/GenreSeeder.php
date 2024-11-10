<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $genres=[
            [
                'name'=>'action'
            ],
            [
                'name'=>'novel'
            ],
        ];
        DB::table('genres')->insert($genres);
    }
}
