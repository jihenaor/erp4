<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymentplans', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->decimal('percent', 5, 2);
            $table->bigInteger('value');
            $table->date('date');
            $table->unsignedInteger('expiration');
            $table->string('description', 45);
            $table->unsignedInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
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
        Schema::dropIfExists('paymentplans');
    }
}
