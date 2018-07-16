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
        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>1,
            'user_id'=>1
        ]);
        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>1,
            'user_id'=>2
        ]);

        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>2,
            'user_id'=>2
        ]);
        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>2,
            'user_id'=>2
        ]);

        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>3,
            'user_id'=>3
        ]);
        Comment::create([
            'comment'=>'This is nice tut',
            'post_id'=>3,
            'user_id'=>3
        ]);
    }
}
