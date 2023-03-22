<?php

namespace Database\Factories;

use App\Models\Agreement;
use App\Models\Employee;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agreement>
 */
class AgreementFactory extends Factory
{
    protected $model = Agreement::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employee_id' => Employee::factory(),
            'order_id' => Order::factory(),
            'date_of_registration' => $this->faker->date(),
            'comment' => $this->faker->text(255)
        ];
    }
}
