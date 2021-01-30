<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Tax::factory(10)->create();
        \App\Models\Taxitem::factory(10)->create();
        \App\Models\Documenttype::factory(3)->create();
        \App\Models\User::factory(3)->create();
        \App\Models\Box::factory(3)->create();
        \App\Models\Noveltiesbox::factory(3)->create();
        \App\Models\Paymentterm::factory(3)->create();
        \App\Models\Paymenttermdetail::factory(3)->create();

        \App\Models\Consecutive::factory(3)->create();
        \App\Models\Customer::factory(30)->create();



        
    }
}
