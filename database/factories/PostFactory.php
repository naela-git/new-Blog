<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Category;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'slug'=> $this->faker->realText(rand(30, 60)),
            'title' => $this->faker->name,
            'image'=>'https://via.placeholder.com/350x150',
            'description'=> $this->faker->realText(rand(30, 60)),
            'body'=> $this->faker->realText(rand(30, 60)),
           'published'=> 0,
           'user_id'=>User::all()->random()->id,
           'category_id'=>Category::all()->random()->id,
        ];
       
       
    }
}
