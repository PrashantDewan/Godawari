<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            'class_id'=> '1',
            'class_name'=> 'Pre Nursery'
        ]);
        DB::table('classes')->insert([
            'class_id'=> '2',
            'class_name'=> 'Nursery',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '3',
            'class_name'=> 'LKG',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '4',
            'class_name'=> 'UKG',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '5',
            'class_name'=> 'Class one',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '6',
            'class_name'=> 'Class Two',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '7',
            'class_name'=> 'Class Three',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '8',
            'class_name'=> 'Class Four',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '9',
            'class_name'=> 'Class Five',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '10',
            'class_name'=> 'Class Six',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '11',
            'class_name'=> 'Class Seven',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '12',
            'class_name'=> 'Class Eight',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '13',
            'class_name'=> 'Class Nine',
        ]);
        DB::table('classes')->insert([
            'class_id'=> '14',
            'class_name'=> 'Class Ten',
        ]);

    }
}