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

// DB::table('students')->insert(['userID'=>'2018-01-A-10','name'=>'Humaira Rafi Zinnurain','gender'=>'Female','dob'=>'1996/01/03','roll'=>'1','section'=>'A','shift'=>'morning','class'=>'10','year'=>'2018','mother'=>'Nargis','father'=>'sultan','contact'=>'+8801708944944','address'=>'Rajshahi']);

    // DB::table('students')->insert(['userID'=>'2018-02-A-10','name'=>'Tasnim Ahmed','gender'=>'Male','dob'=>'1997/05/20','roll'=>'2','section'=>'A','shift'=>'morning','class'=>'10','year'=>'2018','mother'=>'Mst. Nargis Parvin','father'=>'Sultan Ahmed','contact'=>'+8801711066797','address'=>'Kushtia']);
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
