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
        Schema::create('campaigns', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('title', 255)->nullable(false);
            $table->string('slug', 255)->nullable(false);
            $table->string('short_description', 255)->nullable(false);
            $table->longText('body')->nullable(false);
            $table->integer('view_count')->nullable(false);
            $table->enum('status', ['publish', 'pending', 'archived'])->nullable(false);
            $table->integer('nominal')->nullable(false);
            $table->integer('goal')->nullable(false);
            $table->dateTime('end_date');
            $table->text('note');
            $table->string('receiver', 255)->nullable(false);
            $table->timestamps();
            $table->string('path_image', 255);
            $table->dateTime('publish_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campaigns');
    }
};
