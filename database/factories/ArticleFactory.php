<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\Team;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Article::class;
    public function definition()
    {
        return [
            'photo'=>$this->faker->imageUrl(),
            'title'=>$this->faker->sentence,
            'content'=>$this->faker->paragraph,
            'team_id'=>Team::inRandomOrder()->first()->id,
            'created_at'=>$this->faker->dateTimeBetween('-1 year','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 year','now'),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Article $article){
            $article->comments()->createMany(
                Comment::factory()->count(5)->make()->toArray()
            );
        });
    }
}
