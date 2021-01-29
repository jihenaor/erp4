<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'identificationtype' => $this->faker->randomElement(['CC', 'TI', 'NI', 'PE']),
            'identificationnumber' => $this->faker->text(16),
            'name' => $this->faker->sentence(),
            'address' => $this->faker->sentence(),
            'city' => $this->faker->text(10),
            'phonenumber' => $this->faker->phoneNumber,
            'mobilenumber' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
            'name' => $this->faker->sentence(),
            'type' => $this->faker->randomElement(['1', '2'])
        ];
    }
}
