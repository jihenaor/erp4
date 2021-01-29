<?php

namespace Database\Factories;

use App\Models\Noveltiesbox;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoveltiesboxFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Noveltiesbox::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'box_id' => $this->faker->numberBetween(1, 3),
            'user_id' => $this->faker->numberBetween(1, 3),
            'ivalue' => $this->faker->numberBetween(1, 10),
            'fvalue' => $this->faker->numberBetween(10, 20),
            'date' => $this->faker->date($format='Y-m-d', $max='now'),
        ];
    }
}
