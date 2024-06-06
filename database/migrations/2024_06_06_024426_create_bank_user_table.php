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
        Schema::create('bank_user', function (Blueprint $table) {
            $table->id()->nullable(false);
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('user_id');
            $table->string('account', 255)->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_user');
    }
};
