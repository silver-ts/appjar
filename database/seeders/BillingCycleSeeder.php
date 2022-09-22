<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingCycleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_cycles')->insert([
            'name' => 'monthly'
        ]);

        DB::table('billing_cycles')->insert([
            'name' => 'yearly',
            'billing_interval' => 12,
            'discount' => 20.00
        ]);
    }
}
