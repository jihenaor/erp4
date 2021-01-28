<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxitemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxitems', function (Blueprint $table) {
            
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('tax_id');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taxitems');
    }
}
