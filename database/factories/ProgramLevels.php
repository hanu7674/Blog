<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProgramLevels;
use Faker\Generator as Faker;

$factory->define(ProgramLevels::class, function (Faker $faker) {
    return [
        'short_name'=>$faker->text($maxNbChars = 30),
        'name'=>$faker->name()
        
    ];
});
