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
        Schema::create('council_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('file_path');
            $table->unsignedBigInteger('council_id');
            $table->timestamps();
        });
        Schema::table('council_galleries', function (Blueprint $table) {
            $table->foreign('council_id')->references('id')->on('councils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('council_galleries');
    }
};
