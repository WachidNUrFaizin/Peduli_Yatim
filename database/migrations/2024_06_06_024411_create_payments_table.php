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
        Schema::create('payments', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('order_number', 255)->nullable(false);
            $table->integer('nominal')->nullable(false);
            $table->unsignedBigInteger('bank_id')->nullable(false);
            $table->text('note');
            $table->string('path_image', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
