<?php

use Illuminate\Database\Seeder;

class ProductCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
        	'name' => 'Electronics',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Stationary',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Pastery',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Automobile',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Phones',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Art',
        ]); 
        DB::table('product_categories')->insert([
        	'name' => 'Food',
        ]);
    }
}
