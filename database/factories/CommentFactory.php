<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Comment;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Comment::class;
    public function definition()
    {
        return [
            'content'=>$this->faker->paragraph(),
            'article_id'=>$this->faker->randomElement(Article::pluck('id')),
            'user_id'=>$this->faker->randomElement(User::pluck('id')),
            'created_at'=>$this->faker->dateTimeBetween('-1 year','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 year','now'),
        ];
    }
}
