<?php

use Illuminate\Database\Seeder;

class Specializations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Specializations::class,8)->create();

    }
}
