<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(HotelBooking\AdminUser::class, function ($faker) {
    return [
        'username' => $faker->username,
        'password'=> bcrypt('123456')
    ];
});

// $factory->define(HotelBooking\RoomType::class, function ($faker) {
//     return [
//         'name' => $faker->name,
//         'quality'=> $faker->quality
//     ];
// });
