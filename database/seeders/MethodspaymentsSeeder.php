<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Methodspayments;

class MethodspaymentsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $l = Methodspayments::factory(10)->create();

        dump($l->toArray());
    }
}
