<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Customer::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstname,
        'lastName' => $faker->lastname,
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'address'=>$faker->address,
    ];
});
$factory->define(App\Aoop::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstname,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        
        
    ];
});
$factory->define(App\Bear::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstname,
        'weight' => $faker->number,
        
        
        
    ];
});