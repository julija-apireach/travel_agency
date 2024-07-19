<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Review::class;

    public function definition(): array
    {
        return [
            'first_name' => 'Lāsma',
            'last_name' => 'Vilcāne',
            'photo' => 'images/review-foto.svg', 
            'rating' => $this->faker->numberBetween(1, 5),
            'review' => $this->faker->paragraph(rand(1, 5)),
        ];
    }
}
