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
        Schema::create('category_company_product', function (Blueprint $table) {
            $table->unsignedBigInteger('company_product_id');
            $table->unsignedBigInteger('category_id');
        });
        Schema::table('category_company_product', function (Blueprint $table) {
            $table->foreign('company_product_id')->references('id')->on('company_products')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_company_product');
    }
};
