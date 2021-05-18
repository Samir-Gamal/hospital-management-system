<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */





    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->decimal('Total_before_discount',8,2);
            $table->decimal('discount_value',8,2);
            $table->decimal('Total_after_discount',8,2);
            $table->string('tax_rate');
            $table->decimal('Total_with_tax',8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
