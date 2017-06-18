<?php

use Illuminate\Database\Seeder;

class NotificationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notifications = factory(App\Entities\Notification::class, 80)
            ->create([
                'user_id' => function () {
                    return \App\Entities\User::all()->random()->id;
                },
                'picture_id' => function() {
                    return \App\Entities\Picture::all()->random()->id;
                }
            ]);
    }
}
