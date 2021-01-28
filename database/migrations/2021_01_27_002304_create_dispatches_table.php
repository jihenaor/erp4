<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDispatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatches', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->date('date');
            $table->string('name', 45);
            $table->string('address', 200);
            $table->string('city', 45);
            $table->string('schedule', 45);
            $table->string('guidenumber', 45);
            $table->unsignedInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedInteger('carrier_id');
            $table->foreign('carrier_id')->references('id')->on('carriers');
            $table->unsignedInteger('dispatcher_id');
            //$table->foreign('dispatcher_id')->references('id')->on('dispatchers');
            $table->unsignedInteger('receiver_id');
            //$table->foreign('receiver_id')->references('id')->on('receivers');
            
            //verificar doble relacion con user

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
        Schema::dropIfExists('dispatches');
    }
}
