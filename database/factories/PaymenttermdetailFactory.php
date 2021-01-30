<?php

namespace Database\Factories;

use App\Models\Paymenttermdetail;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymenttermdetailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paymenttermdetail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'type' => $this->faker->randomElement(['1', '2', '3']),
            'description' => $this->faker->text(10)
    
    ];
    }
}
