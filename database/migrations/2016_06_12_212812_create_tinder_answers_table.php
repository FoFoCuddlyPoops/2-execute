<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinderAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tinder_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tinder_contact_id')->unsigned();
            $table->boolean('answer1');
            $table->boolean('answer2');
            $table->boolean('answer3');
            $table->boolean('answer4');
            $table->boolean('answer5');
            $table->integer('answer6')->unsigned();
            $table->boolean('answer7');
            $table->boolean('answer8');
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
        Schema::drop('tinder_answers');
    }
}
