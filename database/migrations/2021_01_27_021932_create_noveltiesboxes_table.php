<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoveltiesboxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noveltiesboxes', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->decimal('ivalue', 9, 2);
            $table->decimal('fvalue', 9, 2);
            $table->date('date');
            $table->unsignedInteger('box_id');
            $table->foreign('box_id')->references('id')->on('boxes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('noveltiesboxes');
    }
}
