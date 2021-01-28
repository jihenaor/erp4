<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Taxitems;

class TaxitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $l = Taxitem::factory(10)->create();

        dump($l->toArray());
    }
}
