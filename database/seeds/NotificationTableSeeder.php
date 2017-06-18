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
        $notifications = factory(App\Entities\Notification::class, 10)
            ->create([
                'user_id' => \App\Entities\User::all()->random()->id,
                'picture_id' => \App\Entities\Picture::all()->random()->id
            ]);
    }
}
