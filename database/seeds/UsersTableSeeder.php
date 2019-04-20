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
        factory(App\User::class, 10)->create()->each(function ($user) {
           $user->posts()->save(factory(App\Post::class)->create());
       });


           factory(App\Post::class, 10)->create()->each(function ($post) {
           $post->comments()->save(factory(App\Comment::class)->create());
       });

    }



}
