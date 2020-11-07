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
            $table->id();
            $table->string('description');
            $table->foreign('id_details')->references('id')->on('details');
            $table->date('date_exam');
            $table->integer('note_exam');
            $table->foreign('id_student')->references('id')->on('users');
            $table->foreign('id_teacher')->references('id')->on('users');
            $table->foreign('id_themes')->references('id')->on('themes');
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
