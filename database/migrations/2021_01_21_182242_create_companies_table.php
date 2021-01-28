<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('name',200);
            $table->string('nif',20);
            $table->string('address',200);
            $table->string('city',45);
            $table->string('phonenumber',45);
            $table->string('mobilenumber',45);
            $table->string('email',80);
            $table->string('website',80)->nullable();
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
        Schema::dropIfExists('companies');
    }
}
