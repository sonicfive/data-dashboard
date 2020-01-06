<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderLineItem;
use Faker\Generator as Faker;

$factory->define(OrderLineItem::class, function (Faker $faker) {
    return [
        
        "price" => $faker->randomFloat($nbMaxDecimals = 2, $min = 15, $max = 39),

        "quantity" => $faker->numberBetween($min = 1, $max = 50)
        
    ];
});
