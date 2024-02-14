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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('customer_phone');
            $table->text('customer_address');
            $table->string('customer_email');
            $table->string('payment_proof');
            $table->string('image_product');
            $table->string('name_product');
            $table->text('detail_product');
            $table->integer('quantity_product');
            $table->string('price_product');
            $table->string('total_amount');
            $table->enum('status', [
                'menunggu',
                'proses',
                'terkirim',
                'batal'
            ]);
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
        Schema::dropIfExists('transactions');
    }
};
