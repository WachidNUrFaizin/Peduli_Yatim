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
        Schema::create('donations', function (Blueprint $table) {
            $table->id();   
            $table->unsignedBigInteger('campaign_id')->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('order_number', 255)->nullable(false)->unique();
            $table->tinyInteger('anonim')->nullable(false);
            $table->integer('nominal')->nullable(false);
            $table->text('support');
            $table->enum('status', ['confirmed', 'not_confirmed']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
