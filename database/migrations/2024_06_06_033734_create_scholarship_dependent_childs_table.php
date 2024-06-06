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
        Schema::create('scholarship_dependent_childs', function (Blueprint $table) {
            // Data Anak
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable(false);
            $table->string('name', 255)->nullable(false);
            $table->string('path_image', 255);
            $table->string('status', 255);
            $table->enum('gender', ['laki-laki', 'perempuan']);
            $table->date('birth_date');
            $table->enum('scholl_level', ['SD,MI', 'SMP,MTS', 'SMA,MA,SMK']);
            $table->string('school_name', 255);
            $table->text('school_address');
            $table->string('shool_report_file', 255);
            $table->enum('sholarship_type', ['Yapintar', 'PPA']);

            // Data Orang Tua 
            $table->string('name_parent', 255)->nullable(false);
            $table->date('birth_date_parent');
            $table->string('marital_status', 64);
            $table->text('address');
            $table->string('work', 255);
            $table->integer('salary');
            $table->string('jenis_rumah');
            $table->integer('number_of_dependent');
            $table->string('deoendent_category');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scholarship_dependent_childs');
    }
};
