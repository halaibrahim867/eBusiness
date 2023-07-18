<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=Team::class;
    public function definition()
    {
        $photoPath=storage_path('app/public/teams');
        $photoName=$this->faker->image($photoPath, 180,240,null, false);
        $photoUrl=Storage::url('teams/'.$photoName);
        return [

        ];
    }
}
