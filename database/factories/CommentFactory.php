<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'card_id' => Card::factory(),
            'text' => $this->faker->sentence,
        ];
    }
}
