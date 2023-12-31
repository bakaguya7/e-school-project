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
        Schema::create('data_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nig');
            $table->string('namalengkap');
            $table->string('pendidikan');
            $table->string('matapelajaran');
            $table->string('alamat');
            $table->string('notelp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_gurus');
    }
};
