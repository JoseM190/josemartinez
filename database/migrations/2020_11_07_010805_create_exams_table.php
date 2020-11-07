<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('description');
            $table->unsignedInteger('id_details');
            $table->foreign('id_details')->references('id')->on('details')->onDelete('cascade');
            $table->date('date_exam');
            $table->integer('note_exam');
            $table->unsignedInteger('id_student');
            $table->foreign('id_student')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_teacher');
            $table->foreign('id_teacher')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('id_themes');
            $table->foreign('id_themes')->references('id')->on('themes')->onDelete('cascade');
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
        Schema::dropIfExists('exams');
    }
}
