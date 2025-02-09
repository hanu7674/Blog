<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Departments;
use Faker\Generator as Faker;

$factory->define(Departments::class, function (Faker $faker) {
    return [
        'short_name'=>$faker->text($maxNbChars = 30),
        'name' =>$faker->text($maxNbChars = 30),
        'office_email' =>$faker->email(),
        'hod_email'=>$faker->email()
    ];
});
