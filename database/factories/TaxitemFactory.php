<?php

namespace Database\Factories;

use App\Models\Taxitem;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaxitemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Taxitem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*$taxes = App\Models\Tax::pluck('id')->toArray();

        return [
            'tax_id' => $this->faker->randomElement($taxes),
        ];*/
        
        /*return[
            'tax_id'=> function() {
                return create(\App\Models\Tax::class)->id;
            }
        ];*/
        return[
            'tax_id' => rand(1,10)
        ];
    }
}
