<?php

use Faker\Generator as Faker;

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function (Faker $faker) {

            return [
                'title' => $faker->sentence,
                'description' => $faker->sentence,
                'slug' => $faker->slug,
                'source' => 'videos/c895ce66a3e0f3cb8137f9c220cee4aa.mp4',
                'image' => 'images/image.jpg',
                'views'	=>	$faker->numberBetween(0, 5000),
                'category_id'	=>	$faker->numberBetween(1, 14),
                'user_id'	=>	$faker->numberBetween(1, 3),
                'is_featured'	=>	$faker->numberBetween(0, 1)
            ];

});

$factory->define(App\Category::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'slug' => $faker->slug,
        'color' => $faker->randomElement(['#000000', '#111111', '#eeeeee' , '#dddddd', '#bbb' , '#aaa' , 'red']),
        'icon' => $faker->randomElement(['fa fa-users', 'fab fa-fort-awesome', 'fas fa-chart-line' , 'fas fa-music', 'fas fa-align-center' , 'fas fa-school' , 'fas fa-globe'])
    ];
});