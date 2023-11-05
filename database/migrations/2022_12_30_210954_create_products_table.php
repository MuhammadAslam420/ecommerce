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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained();
            $table->string("name");
            $table->string("slug")->unique();
            $table->string("short_description")->nullable();
            $table->text("description")->nullable();
            $table->double("price")->default(0);
            $table->double("sale_price")->default(0);
            $table->enum("featured",[0,1])->default(0);
            $table->enum("status",['active','in-active'])->default("active");
            $table->string('front_image');
            $table->string("back_image");
            $table->string("images")->nullable();
            $table->decimal("quantity")->default(0);
            $table->decimal("sale_quantity")->default(0);
            $table->enum("stock",['InStock','OutOfStock'])->default("InStock");
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
        Schema::dropIfExists('products');
    }
};
