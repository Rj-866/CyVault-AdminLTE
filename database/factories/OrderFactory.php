<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'item' => $this->faker->word,
            'status' => $this->faker->randomElement(['Pending', 'Completed', 'Cancelled']),
            'popularity' => $this->faker->numberBetween(1, 100)
        ];
    }
}

