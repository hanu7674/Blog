<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Specializations;
use Faker\Generator as Faker;

$factory->define(Specializations::class, function (Faker $faker) {
    return [
        'short_name'=>$faker->text($maxNbChars = 30),
        'name'=>$faker->name(),
        'department_id'=>$faker->numberBetween($min=1,$max=8),
        'program_id'=>$faker->numberBetween($min=1,$max=8),

    ];
});
