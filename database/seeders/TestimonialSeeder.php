<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chief_testimonials')->insert([
            'chief_name' => 'Lekhnath Ghimire',
            'chief_designation' => 'Chairman',
            'chief_testimonial' => "It's an honor to be a part of this institution — which is preparing the next generation of officers, innovators, and world leaders. I am committed to continue this legacy in every way possible. Thank you.",
            'chief_image' => 'lekhnath.jpg',

        ]);

        DB::table('chief_testimonials')->insert([
            'chief_name' => 'Ganesh Dulal',
            'chief_designation' => 'Principal',
            'chief_testimonial' => " I have a dream — that every child should get an opportunity to evolve into a role model in society, I have a dream —  that working on this auspicious mission would truly transform the face of the world.",
            'chief_image' => 'ganesh dulal.jpg',

        ]);

        DB::table('chief_testimonials')->insert([
            'chief_name' => 'Mohan P Niraula',
            'chief_designation' => 'Vice Principal',
            'chief_testimonial' => "It’s my wish and blessing that students of VASS should gather the knowledge and skill required for them to live a life of fulfillment and abundance. I will always be working to facilitate this process.",
            'chief_image' => 'mohan prasad niraula.jpg',

        ]);



    }
}