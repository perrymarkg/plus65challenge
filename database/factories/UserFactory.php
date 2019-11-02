<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Modules\Users\Admin\Admin;
use App\Modules\Users\Member\Member;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => 'appadmn',
        'email_verified_at' => now(),
        'password' => App::make('hash')->make('password'), // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Member::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'username' => $faker->unique()->userName,
        'email_verified_at' => now(),
        'password' => App::make('hash')->make(Str::random(10)),
        'remember_token' => Str::random(10),
    ];
});
