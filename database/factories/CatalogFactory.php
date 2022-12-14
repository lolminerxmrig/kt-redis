<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Catalog;
use Faker\Generator as Faker;

$factory->define(Catalog::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'team_id' => factory(\App\Team::class),
    ];
});
