<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmbulanceTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ambulance_translations', function (Blueprint $table) {
            $table->id();
            $table->string('locale')->index();
            $table->string('driver_name');
            $table->string('notes')->nullable();
            $table->unique(['ambulance_id','locale','driver_name']);
            $table->foreignId('ambulance_id')->references('id')->on('ambulances')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ambulance_translations');
    }
}
