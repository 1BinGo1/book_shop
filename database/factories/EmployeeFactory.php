<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Person;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'person_id' => Person::factory(),
            'position_id' => Position::factory(),
            'experience' => $this->faker->numberBetween(0, 50),
            'premium' => $this->faker->randomFloat(2, 1000, 10000),
            'date_hire' => $this->faker->date(),
            'requisites' => $this->faker->creditCardNumber()
        ];
    }
}
