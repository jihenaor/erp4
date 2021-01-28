<?php

namespace Database\Factories;

use App\Models\Documenttype;
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumenttypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Documenttype::class;

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
