<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->string('owner_name', 255)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->string('phone', 255)->nullable(false);
            $table->text('about');
            $table->string('address', 255);
            $table->char('postal_code', 5);
            $table->string('city', 255);
            $table->string('province', 255);
            $table->string('path_image', 255);
            $table->string('path_image_header', 255);
            $table->string('path_image_footer', 255);
            $table->string('company_name', 255)->nullable(false);
            $table->string('short_description',255)->nullable(false);
            $table->string('keyword', 255)->nullable(false);
            $table->string('phone_hours', 255)->nullable(false);
            $table->string('instagram_link', 255)->nullable(false);
            $table->string('twitter_link', 255)->nullable(false);
            $table->string('fanpage_link', 255)->nullable(false);
            $table->string('google_plus_link', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
