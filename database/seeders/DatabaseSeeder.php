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
        

        // User::create([
        //     'name' => 'Ravi hebat',
        //     'email' => 'rafi_ihzadi@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Rafi ihza',
        //     'email' => 'rafi_ihzadi@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'web programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();

        // post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'Judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nam beatae? Ad consectetur, ex fugit corrupti dolore, saepe placeat quasi sint natus rerum ipsa totam neque? Ratione harum temporibus quasi.'
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, eligendi nemo ipsam corrupti cumque alias natus aliquid quo ratione impedit inventore amet voluptas praesentium temporibus ad beatae itaque exercitationem enim facere doloribus quidem. Alias modi pariatur blanditiis numquam? Magni vitae eligendi, nihil eius soluta accusantium? Eligendi corporis laudantium libero! Amet perspiciatis enim reprehenderit nam, velit eveniet voluptatum laudantium ad doloremque quos! Dolore commodi quam architecto. Consequatur commodi ipsum voluptatum omnis voluptatem numquam quia, consequuntur recusandae rerum amet quibusdam dignissimos provident, aliquid quisquam veritatis impedit quis! Cum culpa pariatur consequuntur provident quae autem facere accusamus consectetur dolore, nobis fugiat, maiores a.'
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'Judul-Kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nam beatae? Ad consectetur, ex fugit corrupti dolore, saepe placeat quasi sint natus rerum ipsa totam neque? Ratione harum temporibus quasi.'
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, eligendi nemo ipsam corrupti cumque alias natus aliquid quo ratione impedit inventore amet voluptas praesentium temporibus ad beatae itaque exercitationem enim facere doloribus quidem. Alias modi pariatur blanditiis numquam? Magni vitae eligendi, nihil eius soluta accusantium? Eligendi corporis laudantium libero! Amet perspiciatis enim reprehenderit nam, velit eveniet voluptatum laudantium ad doloremque quos! Dolore commodi quam architecto. Consequatur commodi ipsum voluptatum omnis voluptatem numquam quia, consequuntur recusandae rerum amet quibusdam dignissimos provident, aliquid quisquam veritatis impedit quis! Cum culpa pariatur consequuntur provident quae autem facere accusamus consectetur dolore, nobis fugiat, maiores a.'
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'Judul-Ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nam beatae? Ad consectetur, ex fugit corrupti dolore, saepe placeat quasi sint natus rerum ipsa totam neque? Ratione harum temporibus quasi.'
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, eligendi nemo ipsam corrupti cumque alias natus aliquid quo ratione impedit inventore amet voluptas praesentium temporibus ad beatae itaque exercitationem enim facere doloribus quidem. Alias modi pariatur blanditiis numquam? Magni vitae eligendi, nihil eius soluta accusantium? Eligendi corporis laudantium libero! Amet perspiciatis enim reprehenderit nam, velit eveniet voluptatum laudantium ad doloremque quos! Dolore commodi quam architecto. Consequatur commodi ipsum voluptatum omnis voluptatem numquam quia, consequuntur recusandae rerum amet quibusdam dignissimos provident, aliquid quisquam veritatis impedit quis! Cum culpa pariatur consequuntur provident quae autem facere accusamus consectetur dolore, nobis fugiat, maiores a.'
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'Judul-Keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, nam beatae? Ad consectetur, ex fugit corrupti dolore, saepe placeat quasi sint natus rerum ipsa totam neque? Ratione harum temporibus quasi.'
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, eligendi nemo ipsam corrupti cumque alias natus aliquid quo ratione impedit inventore amet voluptas praesentium temporibus ad beatae itaque exercitationem enim facere doloribus quidem. Alias modi pariatur blanditiis numquam? Magni vitae eligendi, nihil eius soluta accusantium? Eligendi corporis laudantium libero! Amet perspiciatis enim reprehenderit nam, velit eveniet voluptatum laudantium ad doloremque quos! Dolore commodi quam architecto. Consequatur commodi ipsum voluptatum omnis voluptatem numquam quia, consequuntur recusandae rerum amet quibusdam dignissimos provident, aliquid quisquam veritatis impedit quis! Cum culpa pariatur consequuntur provident quae autem facere accusamus consectetur dolore, nobis fugiat, maiores a.'
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}
