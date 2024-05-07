<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FacadesDB::table('news_categories')->insert([
            'news_category' => '2022',
        ]);
        FacadesDB::table('news_categories')->insert([
            'news_category' => '2021',

        ]);
    }
}