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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 255)->nullable(false);
            $table->string('email', 255)->nullable(false);
            $table->timestamp('email_verified_at');
            $table->string('password', 255)->nullable(false);
            $table->text('two_factor_secret');
            $table->text('two_factor_recovery_codes');
            $table->string('remember_token', 100);
            $table->bigInteger('current_team_id');
            $table->string('phone', 255);
            $table->enum('users_gender_enum', ['laki-laki', 'perempuan']);
            $table->date('birth_date');
            $table->string('job', 255);
            $table->text('address');
            $table->text('about');
            $table->string('path_image', 255);
            $table->unsignedBigInteger('role_id')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
