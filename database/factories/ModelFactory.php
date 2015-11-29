<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'gender' => array_rand(['Male' => 'Male', 'Female' => 'Female', 'Other' => 'Other']),
        'hometown' => $faker->city,
        'nickname' => $faker->word,
        'find_me' => '',
        'title' => $faker->sentence(4),
        'about_me' => $faker->paragraph,
        'website' => $faker->url,
        'not_reviewing' => $faker->sentence(2),
        'reviews' => $faker->sentence(2),
        'book' => $faker->sentence(2),
        'concert' => $faker->word,
        'movie' => $faker->sentence(2),
        'last_meal' => $faker->sentence(2),
        'recent_discovery' => $faker->sentence(2),
        'current_crush' => $faker->sentence(2),
        'primary_locale' => $faker->locale,
        'password' => 'kabir',
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Business::class, function (Faker\Generator $faker) {

    $weekdays = ['sunday','monday','tuesday','wednesday','thursday','friday','saturday'];

    $days = array_map(function($day) use ($faker){
         return [$day => ['open' => $faker->numberBetween(00,23), 'close' => $faker->numberBetween(00,23)] ];
    }, $weekdays);

    return [
        'title' => $faker->sentence(4),
        'address1' => $faker->address,
        'address2' => $faker->streetAddress,
        'city' => $faker->cityName,
        'state' => $faker->district,
        'postal_code' => $faker->postcode,
        'zipcode' => $faker->numberBetween(1000,50000),
        'phone' => $faker->phoneNumber,
        'website' => $faker->url,
        'hours' => $days,
        'closed' => false,
    ];
});

$factory->define(App\City::class, function (Faker\Generator $faker) {
    return [
     'name' => $faker->cityName,
     'country' => $faker->country,
     'district' => $faker->district,
     'postal_code' => $faker->postcode,
     'active' => true
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    $title = $faker->word;
    return [
            'title' => $title,
            'slug' => str_slug($title),
            'about' => $faker->sentence(5),
            'icon' => '/images/default.jpg',
            'thumbnail' => "/images/title.jpg"
        ];
});

$factory->define(App\Review::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->paragraph(2),
        'rating' => $faker->numberBetween(1,5)
    ];
});