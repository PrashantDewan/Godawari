<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            ScholarshipSeeder::class,
            ClassSeeder::class,
            FeeStructureSeeder::class,
            NewsSeeder::class,
            NoticeSeeder::class,
            EventSeeder::class,
            TestimonialSeeder::class,
            ChiefMessageSeeder::class,
        ]);
    }
}