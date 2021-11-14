<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->unsignedInteger('order_id_user');
            $table->unsignedInteger('order_id_field');
            $table->integer('time_of_booking');
            $table->integer('price_of_booking');
            $table->string('payment_proof');
            $table->string('payment_status');
            $table->foreign('order_id_user')->references('id_user')->on('users')->cascade('onDelete');
            $table->foreign('order_id_field')->references('id_fields')->on('fields')->cascade('onDelete');
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
        Schema::dropIfExists('orders');
    }
}
