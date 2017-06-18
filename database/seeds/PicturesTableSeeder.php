<?php

use Illuminate\Database\Seeder;

class PicturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pictures = factory(App\Entities\Picture::class, 5)->create([
            'user_id' => 2
        ]);
    }
}
