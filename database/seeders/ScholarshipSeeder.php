<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('scholarships')->insert([
            'details' => 'It is given to the 10% of the total students based on a scholarship examination at the end of the academic year (applied for both New & Regular Students)',
            'scholarship' => '(25-100)% Scholarship',
        ]);

    }
}