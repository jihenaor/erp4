<?php

namespace Database\Factories;

use App\Models\Methodspayments;
use Illuminate\Database\Eloquent\Factories\Factory;

class MethodspaymentsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Methodspayments::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence()
        ];
    }
}
