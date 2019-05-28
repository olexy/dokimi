<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use dokimi\Model;
use dokimi\Company;
use dokimi\Customer;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'company_id' => factory(Company::class)->create(),
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'status' => $faker->numberBetween($int1 = 0, $int2 = 1),
    ];
});
