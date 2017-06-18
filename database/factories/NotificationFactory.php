<?php
/**
 * Created by PhpStorm.
 * User: juliusblatt
 * Date: 18.06.17
 * Time: 20:44
 */

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entities\Notification::class, function (Faker\Generator $faker) {
    return [
        'link' => $faker->url,
        'caption' => $faker->name(),
        'user_id' => function() {
            return factory(\App\Entities\User::class)->create()->id;
        },
        'picture_id' => function() {
            return factory(\App\Entities\Picture::class)->create()->id;
        },
    ];
});