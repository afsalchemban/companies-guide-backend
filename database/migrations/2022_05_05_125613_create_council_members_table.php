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
        Schema::create('council_members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('dob');
            $table->unsignedBigInteger('nationality');
            $table->string('email')->unique();
            $table->string('website')->nullable();
            $table->string('mobile');
            $table->string('designation');
            $table->string('profile_image')->nullabel();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('area_id');
            $table->unsignedBigInteger('council_id');
            $table->timestamps();
        });
        Schema::table('council_members', function (Blueprint $table) {
            $table->foreign('nationality')->references('id')->on('countries')->onDelete('restrict');
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('restrict');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('restrict');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('council_members');
    }
};
