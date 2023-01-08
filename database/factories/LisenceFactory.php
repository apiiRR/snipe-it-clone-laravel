<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lisence>
 */
class LisenceFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'software_name' => $this->faker->name(),
      'category' => $this->faker->randomElement(['Graphics Software', 'Office Software']),
      'product_key' => $this->faker->randomNumber(),
      'licensed_to_name' => $this->faker->name(),
      'licensed_to_email' => $this->faker->email(),
      'supplier' => $this->faker->randomElement(['adobe', 'microsoft']),
      'order_number' => $this->faker->randomNumber(),
      'purchase_cost' => $this->faker->numberBetween($min = 50000, $max = 5000000),
      'purchase_date' => $this->faker->date(),
      'expiration_date' => $this->faker->date(),
      'termination_date' => $this->faker->date(),
      'purchase_order_number' => $this->faker->randomNumber(),
      'notes' => $this->faker->text()
    ];
  }
}
