<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Reply;
use App\Models\User;
use App\Models\Thread;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => User::inRandomOrder()->first()->id,
        'thread_id' => Thread::inRandomOrder()->first()->id,
        'body' => $faker->paragraph
    ];
});
