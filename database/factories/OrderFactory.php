<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Client;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id' => Client::factory(),
            'book_id' => Book::factory(),
            'date_order' => $this->faker->date(),
            'count_books' => $this->faker->numberBetween(1, 100),
            'date_delivery' => $this->faker->date(),
            'type_delivery' => $this->faker->randomElement(['courier', 'pvz']),
            'price_delivery' => $this->faker->randomFloat(1, 1000, 10000),
            'price_order' => $this->faker->randomFloat(1, 1000, 10000),
            'address_delivery' => $this->faker->text(255),
            'comment' => $this->faker->text(255)
        ];
    }
}
