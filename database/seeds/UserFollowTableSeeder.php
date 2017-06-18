<?php

use Illuminate\Database\Seeder;

class UserFollowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = App\Entities\User::all();
        $relationCount = count($users) / 2;
        $lastIndex = 0;
        for($i = 0; $i < $relationCount; $i++) {
            DB::table('user_follow')->insert([
                'user_id' => $users[$lastIndex],
                'followed_user_id' => $users[$lastIndex+1],
            ]);
            $lastIndex += 1;
        }
    }
}
