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
            'value' => $this->faker->numberBetween(1, 10),
            'expiration' => $this->faker->numberBetween(1, 150),
            'expirationtype' => $this->faker->randomElement(['A', 'B', 'C']),
            'paymentterm_id' => $this->faker->numberBetween(1, 3),

    ];
    }
}
