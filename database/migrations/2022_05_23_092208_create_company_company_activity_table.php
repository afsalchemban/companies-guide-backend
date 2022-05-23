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
        Schema::create('company_company_activity', function (Blueprint $table) {
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('company_activity_id');
        });
        Schema::table('company_company_activity', function (Blueprint $table) {
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('restrict');
            $table->foreign('company_activity_id')->references('id')->on('company_activities')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_company_activity');
    }
};
