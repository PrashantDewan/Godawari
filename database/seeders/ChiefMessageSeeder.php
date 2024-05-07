<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChiefMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faculties')->insert([
            'faculty_name' => 'Lekhnath Ghimire',
            'faculty_position'=> 'Chairman',
            'faculty_message' => "It's an honor to be a part of this institution — which is preparing the next generation of officers, innovators, and world leaders. I am committed to continue this legacy in every way possible. Thank you.",
            'faculty_image' => 'faculty chief 1.jpg',
        ]);

        DB::table('faculties')->insert([
            'faculty_name' => 'Ganesh Dulal',
            'faculty_position'=> 'Principal',
            'faculty_message' => "I have a dream — that every child should get an opportunity to evolve into a role model in society, I have a dream —  that working on this auspicious mission would truly transform the face of the world.",
            'faculty_image' => 'faculty chief.jpg',
        ]);

        DB::table('faculties')->insert([
            'faculty_name' => 'Mohan Prasad Niraula',
            'faculty_position'=> 'Vice-Principal',
            'faculty_message' => "It’s my wish and blessing that students of VASS should be able to gather the knowledge and skill required for them to live a life of fulfillment and abundance. I will always be working to facilitate this process.",
            'faculty_image' => 'mohan prasad niraula.jpg',
        ]);


    }
}