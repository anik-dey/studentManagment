<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers_tbl', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name');
           
            $table->string('teacher_phone');
            $table->string('teacher_picture');
            $table->string('teacher_department');
            $table->string('teacher_email')->unique();
            $table->string('teacher_password');
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
        Schema::dropIfExists('teachers_tbl');
    }
}
