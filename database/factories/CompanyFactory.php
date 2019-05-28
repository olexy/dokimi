<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use dokimi\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'phone' => $faker->phoneNumber,
    ];
});
