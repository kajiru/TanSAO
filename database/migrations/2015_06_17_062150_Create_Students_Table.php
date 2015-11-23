<?php

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
            $table->integer('user_id')->unsigned();
            $table->string('firstName');
            $table->string('secondName')->nullable();
            $table->string('familyName');
            $table->date('dateOfBirth');
            $table->string('phoneNumber')->nullable();
            $table->string('address');
            $table->string('countryOfResidence');
            $table->string('citizenship');
            $table->string('firstLanguage');
            $table->string('highSchoolName');
            $table->string('yearOfGraduation');
            $table->string('registrationStatus')->defualt('0');
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('students');
    }
}
