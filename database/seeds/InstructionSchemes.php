<?php

use Illuminate\Database\Seeder;

class InstructionSchemes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\InstructionSchemes::class,8)->create();
    }
}
