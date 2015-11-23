<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testAccounts', function(Blueprint $table){
            $table->increments('id');
            $table->integer('student_id')->unsigned();
            $table->char('testName',20);
            $table->char('username');
            $table->char('password');
            $table->date('testingDate');
            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
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
        Schema::drop('testAccounts');
    }
}
