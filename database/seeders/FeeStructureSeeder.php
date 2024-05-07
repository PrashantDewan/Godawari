<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class FeeStructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 1,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 1,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 1,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 2500,
            'classes_id' => 1,
        ]);
        // nursery
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 2,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 2,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 2,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 2500,
            'classes_id' => 2,
        ]);
        // lkg
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 3,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 3,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 3,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 2500,
            'classes_id' => 3,
        ]);
        // ukg
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 4,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 4,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 4,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 2500,
            'classes_id' => 4,
        ]);
        // one
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 5,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 5,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 3750,
            'classes_id' => 5,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 2750,
            'classes_id' => 5,
        ]);
        // two
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 6,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 15000,
            'classes_id' => 6,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 4000,
            'classes_id' => 6,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3250,
            'classes_id' => 6,
        ]);
        //three
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 7,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 15000,
            'classes_id' => 7,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 4250,
            'classes_id' => 7,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 4250,
            'classes_id' => 7,
        ]);
        //four
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 8,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 15000,
            'classes_id' => 8,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 4500,
            'classes_id' => 8,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3250,
            'classes_id' => 8,
        ]);
        // five
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 9,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 15000,
            'classes_id' => 9,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 4750,
            'classes_id' => 9,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 9,
        ]);
        // six
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 10,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 20000,
            'classes_id' => 10,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 5000,
            'classes_id' => 10,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 10,
        ]);

        // seven
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 11,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 20000,
            'classes_id' => 11,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 5250,
            'classes_id' => 11,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 11,
        ]);
        // eight
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 12,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 20000,
            'classes_id' => 12,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 5500,
            'classes_id' => 12,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 12,
        ]);
        // nine
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 13,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 20000,
            'classes_id' => 13,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 5750,
            'classes_id' => 13,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 13,
        ]);
        // ten
        DB::table('fees')->insert([
            'account_name' => 'Admission Fee',
            'period' => 'Annually',
            'rate' => 10000,
            'classes_id' => 14,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Annual Fee',
            'period' => 'Annually',
            'rate' => 20000,
            'classes_id' => 14,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Monthly Fee',
            'period' => 'Monthly',
            'rate' => 5750,
            'classes_id' => 14,
        ]);
        DB::table('fees')->insert([
            'account_name' => 'Food',
            'period' => 'Monthly',
            'rate' => 3500,
            'classes_id' => 14,
        ]);
        
    }
}