<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->insert([
            'name' => 'Dan',
            'color' => 'green',
            'number' => 13
        ]);
        DB::table('customers')->insert([
            'name' => 'Stefanie',
            'color' => 'blue',
            'number' => 28,
            'planets' => 'random planets'
        ]);
        DB::table('customers')->insert([
            'name' => 'Stefanie',
            'color' => 'green',
            'number' => 54,
            'planets' => 'random planets'
        ]);
    }
}