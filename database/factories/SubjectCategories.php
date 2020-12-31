<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubjectCategories;
use Faker\Generator as Faker;

$factory->define(SubjectCategories::class, function (Faker $faker) {
    return [
        'short_name'=>$faker->text($maxNbChars = 30),
        'name'=>$faker->name(),
    ];
});
