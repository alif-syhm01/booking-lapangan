<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id_rate');
            $table->unsignedInteger('rate_id_user');
            $table->unsignedInteger('rate_id_field');
            $table->integer('rate_of_number');
            $table->string('comment');
            $table->string('created_by');
            $table->string('edited_by');
            $table->foreign('rate_id_user')->references('id_user')->on('users')->cascade('onDelete');
            $table->foreign('rate_id_field')->references('id_fields')->on('fields')->cascade('onDelete');
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
        Schema::dropIfExists('rates');
    }
}
