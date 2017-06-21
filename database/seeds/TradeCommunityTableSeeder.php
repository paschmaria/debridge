<?php

use Illuminate\Database\Seeder;

class TradeCommunityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('trade_communities')->insert([
        	'name' => 'Yaba',
        	'state_id' => 1,
        ]);

         DB::table('trade_communities')->insert([
        	'name' => 'Surulere',
        	'state_id' => 1,
        ]);

         DB::table('trade_communities')->insert([
        	'name' => 'Ikeja',
        	'state_id' => 1,
        ]);
        
         DB::table('trade_communities')->insert([
        	'name' => 'Maryland',
        	'state_id' => 1,
        ]);

         DB::table('trade_communities')->insert([
        	'name' => 'Lekki',
        	'state_id' => 1,
        ]);

         DB::table('trade_communities')->insert([
        	'name' => 'Victoria Island',
        	'state_id' => 1,
        ]);

         DB::table('trade_communities')->insert([
        	'name' => 'Lagos Island',
        	'state_id' => 1,
        ]);

    }
}
