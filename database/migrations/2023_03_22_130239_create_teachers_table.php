<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('teacher_id');
            $table->string('email')->unique();
            $table->string('gender');
            $table->string('dateofbirth');
            $table->string('phone');
            $table->string('joiningdate');
            $table->string('address');
            $table->string('experience');
            $table->string('class');
            $table->string('stream');
            $table->string('subject');
            $table->string('passport')->nullable();
            $table->string('national_id')->nullable();
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
        Schema::dropIfExists('teachers');
    }
}
