<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('userID')->references('userID')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('gender');
            $table->date('dob');
            $table->integer('roll');
            $table->string('section');
            $table->string('shift');
            $table->integer('class');
            $table->integer('year');
            $table->string('mother');
            $table->string('father');
            $table->string('contact');
            $table->string('address');
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
