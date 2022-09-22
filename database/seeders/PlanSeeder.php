<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'id' => 100,
            'name' => 'Lite',
            'amount' => 11.00,
            'description' => 'Perfect to get started',
            'features_summary' => 'Lite includes'
        ]);

        DB::table('plans')->insert([
            'id' => 200,
            'name' => 'Pro',
            'amount' => 19.00,
            'description' => 'Best for professionals',
            'features_summary' => 'Everthing in Lite, plus:'
        ]);

        DB::table('plans')->insert([
            'id' => 300,
            'name' => 'Ultimate',
            'amount' => 35.00,
            'description' => 'Toolset for hard players',
            'features_summary' => 'Everthing in Pro, plus:'
        ]);
    }
}
