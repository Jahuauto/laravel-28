<?php

use Illuminate\Database\Seeder;
use App\Photos;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 45; $i++) {
            $photo = new Photos();
            $photo->title = $faker->title;
            $photo->url = $faker->url;
            $photo->save();
        }
    }
}
