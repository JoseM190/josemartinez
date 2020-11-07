<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('id_student');
            $table->foreign('id_student')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_themes');
            $table->foreign('id_themes')->references('id')->on('themes')->onDelete('cascade');
            $table->unsignedInteger('id_question');
            $table->foreign('id_question')->references('id')->on('questions')->onDelete('cascade');
            $table->string('answer_student');
            $table->integer('score');
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
        Schema::dropIfExists('details');
    }
}
