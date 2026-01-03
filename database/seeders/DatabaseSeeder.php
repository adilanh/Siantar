<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(LoginUserSeeder::class);

        // Seed contoh arsip surat
        $this->call(ArchiveSeeder::class);
    }
}
