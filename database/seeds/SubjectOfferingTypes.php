<?php

use Illuminate\Database\Seeder;

class SubjectOfferingTypes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SubjectOfferingTypes::class,8)->create();

    }
}
