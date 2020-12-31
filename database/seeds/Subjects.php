<?php

use Illuminate\Database\Seeder;

class Subjects extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Subjects::class,8)->create();
    }
}
