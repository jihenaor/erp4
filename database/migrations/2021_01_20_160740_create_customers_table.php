<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('identificationtype',2);
            $table->string('identificationnumber',16);
            $table->string('name',80);
            $table->string('address',200);
            $table->string('city',45);
            $table->string('phonenumber',45)->nullable();
            $table->string('mobilenumber',45)->nullable();
            $table->string('email',90);
            $table->string('website',90)->nullable();
            $table->string('urlimage',45)->nullable();
            $table->string('type',1); //individual/compañia           
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
        Schema::dropIfExists('customers');
    }
}
