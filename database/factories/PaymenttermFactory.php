<?php

namespace Database\Factories;

use App\Models\Paymentterm;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymenttermFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paymentterm::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'name' => $this->faker->text(45),
                'description' => $this->faker->text(10)
        
        ];
    }
}
