<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('studentno');
            $table->string('gender');
            $table->string('dateofbirth');
            $table->string('nationality');
            $table->string('levelofstudy');
            $table->string('religion');
            $table->string('grades');
            $table->string('class');
            $table->string('schoolattended');
            $table->string('healthinformation');
            $table->string('interest');
            $table->string('pfirstname');
            $table->string('plastname');
            $table->string('pgender');
            $table->string('email')->unique();
            $table->string('ninnumber');
            $table->string('preligion');
            $table->string('occupation');
            $table->string('physicaladdress');
            $table->string('phonenumber');
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
        Schema::dropIfExists('students');
    }
}
