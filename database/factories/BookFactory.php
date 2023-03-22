<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'genre' => $this->faker->word(),
            'authors' => $this->faker->name(),
            'publishing_house' => $this->faker->word(),
            'year_of_publishing' => $this->faker->date(),
            'price' => $this->faker->randomFloat(2,1000,10000),
            'count_in_stock' => $this->faker->numberBetween(1, 100),
            'count_pages' => $this->faker->numberBetween(1, 5000)
        ];
    }
}
