<?php

namespace Database\Factories;

use App\Models\Card;
use App\Models\User;
use App\Models\Column;
use Illuminate\Database\Eloquent\Factories\Factory;

class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'author_id' => User::factory(),
            'executor_id' => User::factory(),
            'column_id' => Column::factory(),

        ];
    }
}
