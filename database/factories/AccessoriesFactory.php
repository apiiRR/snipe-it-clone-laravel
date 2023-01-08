<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accessories>
 */
class AccessoriesFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'accessory_name' => $this->faker->text(),
      'category' => $this->faker->randomElement(['keyboard', 'mouse']),
      'model_number' => $this->faker->randomNumber(),
      'order_number' => $this->faker->randomNumber(),
      'purchase_date' => $this->faker->date(),
      'purchase_cost' => $this->faker->numberBetween($min = 50000, $max = 5000000),
      'quantity' => $this->faker->randomNumber(),
      'notes' => $this->faker->text()
    ];
  }
}
