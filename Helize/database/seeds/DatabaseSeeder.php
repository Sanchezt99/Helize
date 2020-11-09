<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\WearTableSeeder;
use App\Wear;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Wear::class,200)->create();
        // $this->call(UserSeeder::class);
    }
}
