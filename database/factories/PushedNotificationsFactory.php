<?php
/**
 * Created by PhpStorm.
 * User: juliusblatt
 * Date: 18.06.17
 * Time: 20:46
 */

$factory->define(App\Entities\PushedNotification::class, function (Faker\Generator $faker) {
    return [
        'clicked' => $faker->boolean(30),
        'deliver_time' => $faker->dateTimeThisYear(),
        'user_id' => function() {
            return factory(\App\Entities\User::class)->create()->id;
        },
        'notification_id' => function() {
            return factory(\App\Entities\Notification::class)->create()->id;
        },
    ];
});