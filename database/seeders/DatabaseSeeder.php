<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Post::create([
            'name' => 'Ravi hebat',
            'email' => 'rafi_ihzadi@gmail.com',
            'password' => bcrypt('12345')

        ]);

        Category::create([
            'name' => 'web programming'
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'web programming'
            'slug' => 'web-programming'
        ]);
    }
}
