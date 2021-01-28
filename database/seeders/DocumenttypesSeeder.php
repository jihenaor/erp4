<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Documenttypes;

class DocumenttypesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $l = Documenttypes::factory(10)->create();

        dump($l->toArray());
    }
}
