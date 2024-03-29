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
        Schema::dropIfExists('product');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name_product');
            $table->string('price_product');
            $table->string('image');
            $table->string('categories');
            $table->timestamps();
        });
    }
};
