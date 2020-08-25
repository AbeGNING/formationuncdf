<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employe;
use Faker\Generator as Faker;

$factory->define(Employe::class, function (Faker $faker) {
    return [
        'nom_complet'  => $faker->name,
        'age'          => $faker->randomDigit,
        'ville'        => $faker->city,
        'pays'         => $faker->country,
        'poste_occupe' => $faker->jobTitle,
    ];
});
