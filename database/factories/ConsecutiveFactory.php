<?php

namespace Database\Factories;

use App\Models\Consecutive;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConsecutiveFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Consecutive::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'documenttype_id' => $this->faker->unique()->numberBetween(1, 3),
            'startingrange' => $this->faker->numberBetween(1, 10),
            'finalrange' => $this->faker->numberBetween(10, 20),
            'prefix' => $this->faker->randomElement(['INV', 'COT', 'NOT']),
            'startingvigence' => $this->faker->date($format='Y-m-d', $max='now'),
            'finalvigence' => $this->faker->date($format='Y-m-d', $max='now'),
            'consecutive' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement(['A', 'I']),

        ];
    }
}
