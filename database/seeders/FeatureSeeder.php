<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // features for 'Lite' plan
        DB::table('features')->insert([
            'title' => 'CMS integration',
            'plan_id' => 100
        ]);
        
        DB::table('features')->insert([
            'title' => 'Email & SMS reminders',
            'plan_id' => 100
        ]);
        
        DB::table('features')->insert([
            'title' => 'Customer support 24/7',
            'plan_id' => 100
        ]);

        // additional features for 'Pro' plan
        DB::table('features')->insert([
            'title' => 'Advanced analytics',
            'plan_id' => 200
        ]);
        
        DB::table('features')->insert([
            'title' => '100+ integrations',
            'plan_id' => 200
        ]);
        
        DB::table('features')->insert([
            'title' => 'Chat widget',
            'plan_id' => 200
        ]);
        
        DB::table('features')->insert([
            'title' => 'Templates library',
            'plan_id' => 200
        ]);

        // additional features for 'Ultimate' plan
        DB::table('features')->insert([
            'title' => 'Daily performance reports',
            'plan_id' => 300
        ]);
        
        DB::table('features')->insert([
            'title' => 'Dedicated assistant',
            'plan_id' => 300
        ]);
        
        DB::table('features')->insert([
            'title' => 'Artificial intelligence',
            'beta' => true,
            'plan_id' => 300
        ]);
        
        DB::table('features')->insert([
            'title' => 'Marketing tools & automations',
            'plan_id' => 300
        ]);
    }
}
