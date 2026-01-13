<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incoming_letters', function (Blueprint $table) {
            $table->id();
            $table->string('letter_number')->index();
            $table->date('letter_date')->index();
            $table->date('received_date')->index();
            $table->string('sender')->index();
            $table->string('subject');
            $table->string('category')->nullable()->index();
            $table->text('summary')->nullable();
            $table->string('status')->default('Baru')->index();
            $table->string('index_code')->nullable();
            $table->date('reference_letter_date')->nullable();
            $table->string('reference_letter_number')->nullable();
            $table->string('instruction_number')->nullable();
            $table->string('package_number')->nullable();
            $table->string('forwarded_to')->nullable();
            $table->text('instruction')->nullable();
            $table->text('final_direction')->nullable();
            $table->string('file_path')->nullable();
            $table->string('storage_disk')->default('public');
            $table->string('original_filename')->nullable();
            $table->string('file_mime')->nullable();
            $table->unsignedBigInteger('file_size')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });

        // Full-text search index for MySQL
        DB::statement('ALTER TABLE incoming_letters ADD FULLTEXT INDEX idx_incoming_fulltext (subject, summary)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incoming_letters');
    }
};
