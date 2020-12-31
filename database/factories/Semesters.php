<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Semesters;
use Faker\Generator as Faker;

$factory->define(Semesters::class, function (Faker $faker) {
    return [
        'regulation_id'=>$faker->numberBetween($min = 1,$max=8),
        'short_name'=>$faker->text($maxNbChars = 30),
        'name'=>$faker->name(),
        'semester_number'=>$faker->numberBetween($min = 1,$max=8)
    ];
});
