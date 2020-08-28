<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Agent;
use Faker\Generator as Faker;

$factory->define(Agent::class, function (Faker $faker) {

    $offices = collect([

        'west', 'east', 'north', 'south'

    ]);

    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'office' => $offices->random()
    ];

});
