<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model=User::class;
    public function definition()
    {
        $photoPath=storage_path('app/public/users');
        $photoName=$this->faker->image($photoPath, 30,25,null, false);
        $photoUrl=Storage::url('users/'.$photoName);
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'photo'=>$photoUrl,
            'created_at'=>$this->faker->dateTimeBetween('-1 year','now'),
            'updated_at'=>$this->faker->dateTimeBetween('-1 year','now'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
