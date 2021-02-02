<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        
//        \App\Models\Box::factory(3)->create();

        \App\Models\Box::factory(1)->create(['name' => 'Caja 1']);
        \App\Models\Box::factory(1)->create(['name' => 'Caja 2']);
        \App\Models\Box::factory(1)->create(['name' => 'Caja 3']);

        \App\Models\Noveltiesbox::factory(3)->create();
        \App\Models\Paymentterm::factory(3)->create();
        \App\Models\Paymenttermdetail::factory(3)->create();

        \App\Models\Consecutive::factory(3)->create();
        \App\Models\Customer::factory(30)->create();

        \App\Models\Item::factory(30)->create();
        \App\Models\Attribute::factory(30)->create();
        \App\Models\Term::factory(30)->create();
        
        /*DB::table('item_term')->insert([
            'item_id' => numberBetween(1, 30),
            'term_id' => numberBetween(1, 30),
            'price' => 0,
        ]);*/
        
//        \App\Models\Itemterm::factory(30)->create();


  
       // \App\Models\Itemtype::factory(30)->create();
       // \App\Models\Itemdocument::factory(30)->create();
     
        // \App\Models\Itemdispatches::factory(30)->create();        
    }
}
