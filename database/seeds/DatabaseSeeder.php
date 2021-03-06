<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(UserFollowTableSeeder::class);
        $this->call(PicturesTableSeeder::class);
        $this->call(NotificationTableSeeder::class);
        $this->call(PushedNotificationTableSeeder::class);
    }
}
