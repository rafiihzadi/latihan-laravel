<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * 
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,8)),
            'slug' => $this->fake->slug(),
            'excerpt' => $this->fake->paragraph(),
            // 'body' => '<p>' . implode('</p><p>') ,$this->fake->paragraph(mt_rand(5,10)), </p>',
            'body' => collect($this->fake->paragraph(mt_rand(5,10)))
                         ->map(fn($p) => "<p>$p</p>"),         
            'user_id' => mt_rand (1,3),
            'category_id' => mt_rand (1,2)
        ];
    }
}