<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'https://picsum.photos/200/300',
            'content' => 1,
            'user_id' => 1,
        ]);
    }
}
