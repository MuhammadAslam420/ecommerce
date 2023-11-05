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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->double('subtotal');
            $table->double('discount');
            $table->double('shipping_charges');
            $table->double('tax');
            $table->double("total");
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('mobile');
            $table->string('address1');
            $table->string('address2')->nullable();
            $table->string('city');
            $table->string('province');
            $table->string('country');
            $table->string('zipcode')->nullable();
            $table->enum('status',['pending','dispatch','delivered','cancel'])->default('pending');
            $table->date('delivery_date')->nullable();
            $table->date('cancel_date')->nullable();
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
        Schema::dropIfExists('orders');
    }
};
