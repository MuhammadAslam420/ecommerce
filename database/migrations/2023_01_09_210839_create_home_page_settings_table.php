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
        Schema::create('home_page_settings', function (Blueprint $table) {
            $table->id();
            $table->string("name")->default("Ma Mart");
            $table->string('web_logo')->default("logo.svg");
            $table->string('mobile_logo')->default("logo.svg");
            $table->string('footer_logo')->default("logo.svg");
            $table->string('m_footer_logo')->default("logo.svg");
            $table->string('hotline')->default("+923106473564");
            $table->string('mobile')->default("+923126473564");
            $table->string('email')->default("info@mamart.com");
            $table->string('address')->nullable("Punjab Multan Pakistan");
            $table->text('map')->nullable();
            $table->string('facebook')->default("www.facebook.com");
            $table->string('youtube')->default("www.youtube.com");
            $table->string('twitter')->default("www.twitter.com");
            $table->string('instagram')->default("www.instagram.com");
            $table->string('pinterest')->default("www.pinterest.com");
            $table->string('app_store')->default("https://apps.apple.com/us/");
            $table->string('play_store')->default("https://play.google.com/store/apps?gl=us");
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
        Schema::dropIfExists('home_page_settings');
    }
};
