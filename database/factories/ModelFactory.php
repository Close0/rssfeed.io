<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Feed::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'link' => $faker->url,
        'description' => $faker->paragraph(),
    ];
});

$factory->define(App\FeedItem::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(),
        'link' => $faker->url,
        'description' => $faker->paragraph(),
        'author' => $faker->name,
        'category' => $faker->word,
    ];
});