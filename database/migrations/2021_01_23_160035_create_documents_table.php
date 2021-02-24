<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('consecutive',45);
            $table->unsignedInteger('customer_id');
            $table->date('date');
            $table->string('paymentreference',100);
            $table->date('duedate');
            $table->string('expirationdays',45);
            $table->string('email',90);
            $table->string('status', 10);
            //$table->string('referenciacliente',45);
            //$table->string('comercial',45);
            //$table->string('recipientbank',45);
            //$table->string('incoterm',45);
            //$table->string('posicionfiscal',45);
            //$table->string('publicar',45);
            //$table->string('publicarautomaticamente',45);
            //$table->string('pararevisar',45);
            $table->unsignedInteger('documenttype_id');
            $table->foreign('documenttype_id')->references('id')->on('documenttypes');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->unsignedInteger('paymentterm_id')->nullable();
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedInteger('box_id')->nullable();
            $table->foreign('box_id')->references('id')->on('boxes');
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
        Schema::dropIfExists('documents');
    }
}
