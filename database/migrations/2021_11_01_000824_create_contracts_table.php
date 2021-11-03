<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('home_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('home_id')->references('id')->on('homes');
            $table->string('price');
            $table->dateTime('start_time');
            $table->dateTime('end_time')->nullable();
            $table->string('renter_phone');
            $table->string('leaser_phone');
            $table->string('renter_idcard');
            $table->string('leaser_idcard');
            $table->text('regulations');
            $table->text('description')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
