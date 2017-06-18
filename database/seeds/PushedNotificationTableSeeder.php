<?php

use Illuminate\Database\Seeder;

class PushedNotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allUsers = \App\Entities\User::all();
        $allNotifications = \App\Entities\Notification::all();

        $usedPairs = [];
        $max = 400;
        for($i = 0; $i < $max; $i++) {

            $userId = $allUsers->random()->id;
            $notificationId = $allNotifications->random()->id;

            if(isset($usedPairs[$userId]) && isset($usedPairs[$userId][$notificationId])) {
                continue;
            } else {
                $notification = factory(App\Entities\PushedNotification::class, 1)
                    ->create([
                        'user_id' => $userId,
                        'notification_id' => $notificationId
                    ]);
                $usedPairs[$userId][$notificationId] = true;
            }


        }

    }
}
