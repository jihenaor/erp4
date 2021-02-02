<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ref' => $this->faker->text(45),
            'name' => $this->faker->text(45),
            'canbesold' => $this->faker->randomElement(['Y', 'N']),
            'canbebought' => $this->faker->randomElement(['Y', 'N']),
            'barcode' => $this->faker->text(45),
            'notes' => $this->faker->text(200),
            'urlimage' => $this->faker->imageUrl(1024, 1024)
        ];
    }
}
