<?php

use Illuminate\Database\Seeder;

class Departments extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Departments::class,8)->create();
    }
}
