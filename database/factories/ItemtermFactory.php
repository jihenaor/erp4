<?php

namespace Database\Factories;

use App\Models\Itemterm;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemtermFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Itemterm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price'=>$this->faker->numberBetween(1, 30),
            'item_id'=>$this->faker->numberBetween(1, 30),
            'term_id'=>$this->faker->numberBetween(1, 30)
        ];
    }
}
