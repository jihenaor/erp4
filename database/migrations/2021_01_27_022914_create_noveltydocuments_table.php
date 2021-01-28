<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoveltydocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noveltydocuments', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncremet();
            $table->dateTime('date');
            $table->string('description', 200);
            $table->string('email', 255);
            $table->unsignedInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
            $table->unsignedInteger('typenovelty_id');
            $table->foreign('typenovelty_id')->references('id')->on('typenovelties');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //$table->unsignedInteger('user_id'); otro user
            //$table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('noveltydocuments');
    }
}
