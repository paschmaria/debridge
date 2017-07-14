<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(TradeCommunityTableSeeder::class);
        $this->call(CountriesTableSeeder::class);
        // realpath(path)
        // base_path()
         // realpath(base_path()."/../images/pictures/");
    }
}
