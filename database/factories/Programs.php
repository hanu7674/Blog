<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Programs;
use Faker\Generator as Faker;

$factory->define(Programs::class, function (Faker $faker) {
    return [
        'program_level_id'=>$faker->numberBetween($min = 1,$max = 8),
        'short_name' =>$faker ->text($maxNbChars = 30),
        'name' => $faker -> name(),
    ];
});
