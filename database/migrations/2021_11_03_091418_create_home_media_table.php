<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_media', function (Blueprint $table) {
            $table->unsignedBigInteger('home_id');
            $table->unsignedBigInteger('media_id');
            $table->foreign('home_id')->references('id')->on('homes');
            $table->foreign('media_id')->references('id')->on('media');
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
        Schema::dropIfExists('home_media');
    }
}
