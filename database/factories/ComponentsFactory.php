<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Components>
 */
class ComponentsFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */
  public function definition()
  {
    return [
      'component_name' => $this->faker->name(),
      'category' => $this->faker->randomElement(['HDD/SSD', 'RAM']),
      'quantity' => $this->faker->randomNumber(),
      'serial' => $this->faker->text(),
      'order_number' => $this->faker->randomNumber(),
      'purchase_date' => $this->faker->date(),
      'purchase_cost' => $this->faker->numberBetween($min = 50000, $max = 5000000),
      'notes' => $this->faker->text()
    ];
  }
}
