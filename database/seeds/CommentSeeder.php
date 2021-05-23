<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'content' => 'FNB',
            'name' => 'FNB',
            'post_id' => 1,
        ]);
    }
}
