<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SubjectOfferingTypes;
use Faker\Generator as Faker;

$factory->define(SubjectOfferingTypes::class, function (Faker $faker) {
    return [
        //'id'=>$faker->numberBetween($min=1,$max=8),
        'description'=>$faker->word()
        
    ];
});
