<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxitemdocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taxitemdocuments', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncremet();
            $table->decimal('factor', 5, 2);
            $table->bigInteger('value');
            $table->unsignedInteger('tax_id');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->unsignedInteger('itemdocument_id');
            $table->foreign('itemdocument_id')->references('id')->on('itemdocuments');
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
        Schema::dropIfExists('taxitemdocuments');
    }
}
