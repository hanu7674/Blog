<?php

use Illuminate\Database\Seeder;

class Syllabus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Syllabus::class,8)->create();
    }
}