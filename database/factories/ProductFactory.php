<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nama' => $faker->word,
        'detail' => $faker->paragraph,
        'harga' => $faker->numberBetween(100000,10000000),
        'stok'=> $faker->randomDigit,
        'diskon' => $faker->numberBetween(2,50),
        'user_id' => function(){
        	return App\User::all()->random();
        },
    ];
});
