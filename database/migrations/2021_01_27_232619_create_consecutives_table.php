<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsecutivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consecutives', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->unsignedInteger('startingrange');
            $table->unsignedInteger('finalrange');
            $table->string('prefix', 3);
            $table->date('startingvigence');
            $table->date('finalvigence');
            $table->unsignedInteger('consecutive');
            $table->unsignedInteger('documenttype_id');
            $table->string('status', 1);
            $table->foreign('documenttype_id')->references('id')->on('documenttypes');
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
        Schema::dropIfExists('consecutives');
    }
}
