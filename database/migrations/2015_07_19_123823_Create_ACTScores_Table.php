<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateACTScoresTable extends Migration
{/**
 * Create ACTSCores Table.
 *
 * Note:
 * score => Composite Score
 * score{X} => Section X score.
 *
 * type => Can be actual test(type = 0), practice(type =  1), etc
 *
 *
 * @return void
 */
    public function up()
    {
        Schema::create('ACTScores', function(Blueprint $table){
            $table->increments('id');

            $table->integer('student_id')->unsigned();
            $table->smallInteger('type')->default(1);
            $table->smallInteger('score');
            $table->smallInteger('scoreE');
            $table->smallInteger('scoreM');
            $table->smallInteger('scoreR');
            $table->smallInteger('scoreS');
            $table->smallInteger('scoreW')->nullable();
            $table->date('testDate')->nullable();

            $table->timestamps();

            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ACTScores');
    }

}
