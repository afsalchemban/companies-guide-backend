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
        Schema::create('council_events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->string('link');
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('council_id');
            $table->date('event_date');
            $table->timestamps();
        });
        Schema::table('council_events', function (Blueprint $table) {
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
        Schema::dropIfExists('council_events');
    }
};
