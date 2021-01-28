<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemdispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemdispatches', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->decimal('qty', 9, 2);
            $table->decimal('weigth', 9, 2);
            $table->decimal('width', 9, 2);
            $table->decimal('height', 9, 2);
            $table->unsignedInteger('item_id');
            $table->foreign('item_id')->references('id')->on('items');
            $table->unsignedInteger('dispatch_id');
            $table->foreign('dispatch_id')->references('id')->on('dispatches');           
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
        Schema::dropIfExists('itemdispatches');
    }
}
