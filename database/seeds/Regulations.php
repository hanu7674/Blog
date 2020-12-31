<?php

use Illuminate\Database\Seeder;

class Regulations extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Regulations::class,8)->create();

    }
}
