<?php

use Illuminate\Database\Seeder;

class TradeInterestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trade_interests')->insert([
        	'name' => 'Manufacturer',
        ]);
        DB::table('trade_interests')->insert([
        	'name' => 'Retailer',
        ]);
        DB::table('trade_interests')->insert([
        	'name' => 'Wholesaler',
        ]);
        DB::table('trade_interests')->insert([
        	'name' => 'Service Provider',
        ]);
        DB::table('trade_interests')->insert([
        	'name' => 'Local Farmer',
        ]);
    }
}
