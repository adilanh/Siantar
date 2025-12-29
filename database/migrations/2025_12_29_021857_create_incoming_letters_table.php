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
        Schema::create('incoming_letters', function (Blueprint $table) {
            $table->id();
            $table->string('index_code')->nullable(); // Indeks
            $table->date('received_date'); // Tanggal Masuk
            $table->string('sender'); // Asal Surat
            $table->string('subject'); // Perihal
            $table->date('letter_date'); // Tanggal Surat
            $table->string('letter_number'); // No Surat
            $table->string('forwarded_to')->nullable(); // Diteruskan Kepada (Bisa nama jabatan/role)
            $table->text('instruction')->nullable(); // Instruksi/Informasi
            $table->string('file_path')->nullable(); // Upload file surat (opsional)
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Yang menginput
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming_letters');
    }
};
