<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('ref', 45);
            $table->string('name', 45);
            $table->string('canbesold', 1);
            $table->string('canbebought', 1);
            $table->string('barcode', 45);
            $table->string('notes', 200);
            $table->string('urlimage', 200)->nullable();
            $table->timestamps();

            /*
en la relacion con categoria
            ->onDelete('set null)
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
