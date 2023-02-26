<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senf_students', function (Blueprint $table) {
            $table->id();
            $table->integer('senf_id')->unsigned();
            $table->integer('student_id')->unsigned();
            $table->integer('month_fee');
            $table->integer('Registration_fee');
            $table->integer('chance_fee')->nullable();
            $table->integer('exam_fee')->nullable();
            $table->integer('id_card_fee')->nullable();
            $table->integer('transcript_fee')->nullable();
            $table->integer('monograph_fee')->nullable();
            $table->integer('diploma_fee')->nullable();
            $table->integer('tajil_fee')->nullable();
            $table->integer('chance_cource_fee')->nullable();
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
        Schema::dropIfExists('senf_students');
    }
};
