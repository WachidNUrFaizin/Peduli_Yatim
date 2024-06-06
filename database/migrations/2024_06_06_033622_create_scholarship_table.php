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
        Schema::create('scholarship', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('koordinator_name', 255)->nullable(false);
            $table->integer('dependent_child_ammount');
            $table->bigInteger('ktp_number')->nullable(false);
            $table->bigInteger('phone_number')->nullable(false);
            $table->string('address', 255);
            $table->text('city');
            $table->text('user_marital_status');
            $table->text('user_last_education');
            $table->string('job', 255);
            $table->bigInteger('salary_permonth')->nullable(false);
            $table->string('house_ownership', 255);
            $table->string('path_image_Ktp', 255);
            $table->string('path_image_House', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship');
    }
};
