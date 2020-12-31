<?php

use Illuminate\Database\Seeder;

class SubjectCategories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\SubjectCategories::class,8)->create();

    }
}
