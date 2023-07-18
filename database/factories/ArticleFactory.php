<?php

namespace Database\Factories;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Subscriber;
use App\Models\Team;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
        $photoPath = storage_path('app/public/blogs');
        $photoName=$this->faker->image($photoPath, 680 , 480,null, false);
        $photoUrl=Storage::url('blogs/'.$photoName);
        return [
            'photo'=>$photoUrl,
            'title'=>$this->faker->sentence(),
            'partial'=>$this->faker->sentence(5),
            'content'=>$this->faker->paragraph(20),
            'user_id'=>$this->faker->randomElement(User::pluck('id')),
            'article_category_id'=>$this->faker->randomElement(ArticleCategory::pluck('id')),
            'created_at'=>$this->faker->dateTimeBetween('-1 year','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 year','now'),
        ];
    }


   /*public function configure()
    {
        return $this->afterCreating(function (Article $article){
            $article->comments()->createMany(
                Comment::factory()->count(5)->make()->toArray()
            );
        });
    }*/
}
