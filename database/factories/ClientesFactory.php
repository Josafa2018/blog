<?php

use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
    return [
        'name'    => $faker->name,
        'address' => $faker->address,
        'city'    => $faker->city,
        'phone'   => $faker->phoneNumber,
        'since'   => $faker->datetime(),
    ];
});

