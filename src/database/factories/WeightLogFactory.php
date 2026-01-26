<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

class WeightLogFactory extends Factory
{
    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'date'=> $this->faker->date('Y-m-d'),
            'weight' => $this->faker->randomFloat(1, 50, 100),
            'calories' => $this->faker->numberBetween(100,1000),
            'exercise_time' => $this->faker->time('H:i'),
            'exercise_content'=> $this->faker->realText(100),
        ];
    }
}
