<?php
$factory->define(App\Book::class, function (Faker\Generator $faker) {


    return [
        'user_id' => 1,
        'title' => $faker->name,
        'description' => $faker->paragraph,

    ];
});