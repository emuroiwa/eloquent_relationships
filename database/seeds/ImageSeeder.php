<?php

use Illuminate\Database\Seeder;
use App\Image;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Image::create([
            'url' => 'https://picsum.photos/200/300',
            'post_id' => 1,
            'user_id' => 1,
        ]);
    }
}
