<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorChecksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_checks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('visitor_id');
            $table->foreign('visitor_id')->references('id')->on('visitors')->onDelete('cascade');
            $table->timestamp('checkin_datetime')->nullable();
            $table->timestamp('checkout_datetime')->nullable();
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
        Schema::dropIfExists('visitor_checks');
    }
}
