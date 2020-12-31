<?php

use Illuminate\Database\Seeder;

class Programs extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Programs::class,8)->create();

    }
}
