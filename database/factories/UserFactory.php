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
    static $password;
    $sites  = ['github','ok','vk','gm','fb','tw'];
    $rand = array_rand($sites);

    $avatars = [
        'http://www.iconninja.com/files/232/925/277/avatar-face-icon.png',
        'http://www.iconarchive.com/download/i47456/hopstarter/face-avatars/Male-Face-D1.ico',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8YRB_RRpu3mJNkYMVMNVTDu0tifKXTcMOpxHjsQgQwEOAqp6p',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_1jFcnNv7_691N6lVSN8rTb_0nBlUeNGQKDQBRbSERZHwRa_s',
        'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQyMUnjY55RcMBRQaSA5nCgqkNb3E16jjECK2nR55B87WtBH0Zb',
        '',
        '',
    ];

    $random = array_rand($avatars);
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'website' => $sites[$rand],
        'avatar' => $avatars[$random],
    ];
});
