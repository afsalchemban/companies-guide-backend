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
        Schema::create('council_companies', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('landline_number');
            $table->string('trade_license_number');
            $table->string('legal_status');
            $table->string('issued_by');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('city_id');
            $table->unsignedBigInteger('area_id');
            $table->string('person_in_charge_name');
            $table->string('person_in_charge_designation');
            $table->string('person_in_charge_email');
            $table->string('person_in_charge_mobile');
            $table->string('person_in_charge_country');
            $table->unsignedBigInteger('council_id');
            $table->unsignedBigInteger('council_member_id')->nullable();

            $table->timestamps();
        });
        Schema::table('council_companies', function (Blueprint $table) {
            $table->foreign('council_id')->references('id')->on('councils')->onDelete('cascade');
            $table->foreign('council_member_id')->references('id')->on('council_members')->onDelete('restrict');
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
        Schema::dropIfExists('council_companies');
    }
};
