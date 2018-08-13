<?php
$factory->define(App\Product::class, function (Faker\Generator $faker) {
    return [
	'user_id' => factory('App\User')->create()->id,
	'name' => $faker->word(),
	'description' => $faker->paragraph(),
        'price' => $faker->randomNumber(4)
    ];
});