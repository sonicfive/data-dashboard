<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {

    $varieties = collect(["robusta", "arabica"]);

    $sources = collect(["indonesia", "puerto rico", "colombia"]);

    return [

        "title" => $faker->title,

        "description" => $faker->text,

        "variety" => $varieties->random(),

        "source" => $sources->random()
        
    ];
});

