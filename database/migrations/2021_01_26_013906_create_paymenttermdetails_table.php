<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymenttermdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paymenttermdetails', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('type', 1);
            $table->decimal('value', 5, 2);
            $table->unsignedInteger('expiration');
            $table->string('expirationtype', 1);
            $table->unsignedInteger('paymentterm_id');
            $table->foreign('paymentterm_id')->references('id')->on('paymentterms');

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
        Schema::dropIfExists('paymenttermdetails');
    }
}
