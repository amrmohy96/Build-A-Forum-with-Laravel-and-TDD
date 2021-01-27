<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Thread;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(Thread::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'title' => $faker->word,
        'body' => $faker->paragraph
    ];
});
