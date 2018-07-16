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
           'title'=>'What is html',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>2
        ]);
        Post::create([
            'title'=>'What is bootstrap',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>2
        ]);

        Post::create([
            'title'=>'What is Angular',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>3
        ]);
        Post::create([
            'title'=>'What is VueJs',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>3
        ]);
        Post::create([
            'title'=>'What is Jquery Plugin',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>4
        ]);
        Post::create([
            'title'=>'What is Jquery slider',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi asperiores atque autem consectetur culpa eius, enim ex magni necessitatibus non praesentium, quod similique sint tempora tenetur ut voluptas! Atque, odit!',
            'image'=>'test.jpg',
            'category_id'=>4
        ]);
    }
}
?>

