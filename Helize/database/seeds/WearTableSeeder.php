<?php

use Illuminate\Database\Seeder;
use App\Wear;

class WearTableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Wear::class,10)->create();
    }
}

