<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class DetinationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name('id_ID'),
            'description' => $this->faker->sentence(),
            'location' => $this->faker->address(),
            'working_days' => $this->faker->randomElement(['Everyday', 'Weekend']),
            'working_hours' => $this->faker->time() . ' - ' . $this->faker->time(),
            'ticket_price' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
