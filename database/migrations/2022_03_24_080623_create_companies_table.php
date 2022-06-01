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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('landline_number');
            $table->string('trade_license_number');
            $table->string('legal_status');
            $table->string('issued_by');
            $table->string('website');
            $table->string('services')->nullable();
            $table->string('aboutus')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('twitter_url')->nullable();
            $table->string('youtube_url')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('area_id');
            $table->string('person_in_charge_name');
            $table->string('person_in_charge_designation');
            $table->string('person_in_charge_email');
            $table->string('person_in_charge_mobile');
            $table->string('person_in_charge_country');
            $table->integer('companiable_id');
            $table->string('companiable_type');
            $table->timestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
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
        Schema::dropIfExists('companies');
    }
};
