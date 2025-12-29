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
        Schema::create('outgoing_letters', function (Blueprint $table) {
            $table->id();
            $table->string('letter_number'); // No Surat
            $table->date('letter_date'); // Tanggal Surat
            $table->string('recipient'); // Tujuan Surat
            $table->string('subject'); // Perihal
            $table->string('file_path')->nullable(); // Arsip File
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Pembuat surat
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outgoing_letters');
    }
};
