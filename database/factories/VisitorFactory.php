<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Exit11\SocialLogin\Models\Visitor;
use Faker\Generator as Faker;

$factory->define(Visitor::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ko_kr');
    $date = $faker->dateTimeThisMonth;
    return [
        'name' => $faker->name,
        'uuid' => $faker->uuid,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'email_verified_at' => function () use ($date) {
            return mt_rand(0, 100) % 2 == 0 ? $date : null;
        },
        'name' => $faker->name,
        'last_login' => json_encode([
            'ip' => $faker->ipv4,
            'date' => $faker->iso8601($date),
            'agent' => $faker->userAgent,
        ]),
        'agree_to_marketing' => 1,
        'created_at' => $date,
        'updated_at' => $date,
        'deleted_at' => function () {
            return mt_rand(0, 100) % 2 == 0 ? now() : null;
        },
    ];
});
