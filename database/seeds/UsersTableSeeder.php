<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Olaf',
            'email' => 'olaf13550150150@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Waldemar',
            'email' => 'waldemar183833135551@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Petrovich',
            'email' => 'petrovic13513500522@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jinthai',
            'email' => 'jinthai23513627424@gmail.com',
            'password' => bcrypt('secret'),
        ]);
}
