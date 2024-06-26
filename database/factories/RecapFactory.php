<?php

namespace Database\Factories;

use App\Models\Recap;
use Illuminate\Database\Eloquent\Factories\Factory;

class RecapFactory extends Factory
{
    protected $model = Recap::class;

    public function definition()
    {
        return [
            'month' => $this->faker->monthName,
            'sales' => $this->faker->randomFloat(2, 1000, 5000),
            'expenses' => $this->faker->randomFloat(2, 500, 2500),
            'profit' => $this->faker->randomFloat(2, 500, 3000)
        ];
    }
}
