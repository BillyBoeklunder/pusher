<?php
/**
 * Created by PhpStorm.
 * User: juliusblatt
 * Date: 18.06.17
 * Time: 20:40
 */



/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entities\Picture::class, function (Faker\Generator $faker) {

    return [
        'file' => $faker->url,
        'name' => $faker->name(),
        'user_id' => function() {
            return factory(\App\Entities\User::class)->create()->id;
        },
    ];
});