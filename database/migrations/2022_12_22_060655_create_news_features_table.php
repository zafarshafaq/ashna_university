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
        Schema::create('news_features', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('picture');
            $table->bigInteger('news_id')->unsigned();
            $table->timestamps();
            $table->foreign('news_id')
            ->references('id')->on('news')
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
        Schema::dropIfExists('news_features');
    }
};
