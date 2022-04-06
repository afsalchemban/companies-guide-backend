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
            $table->string('activities');
            $table->string('legal_status');
            $table->string('issued_by');
            $table->string('country');
            $table->string('city');
            $table->string('person_in_charge_name');
            $table->string('person_in_charge_designation');
            $table->string('person_in_charge_email');
            $table->string('person_in_charge_mobile');
            $table->string('person_in_charge_country');
            $table->string('package_id')->nullable();
            $table->unsignedBigInteger('sale_id');
            $table->timestamps();
        });
        Schema::table('companies', function (Blueprint $table) {
            $table->foreign('sale_id')->references('id')->on('sales')->onDelete('restrict');
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
