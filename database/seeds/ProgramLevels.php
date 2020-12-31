<?php

use Illuminate\Database\Seeder;

class ProgramLevels extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ProgramLevels::class,8)->create();
    }
}
