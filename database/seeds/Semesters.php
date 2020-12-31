<?php

use Illuminate\Database\Seeder;

class Semesters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Semesters::class,8)->create();

    }
}
