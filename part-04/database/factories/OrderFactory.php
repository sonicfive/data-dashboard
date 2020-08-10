<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Order::class, function (Faker $faker) {
    return [

        "date" => Carbon::now()->subMonth($faker->numberBetween($min = 1, $max = 50))
      
    ];
});
