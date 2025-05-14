<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
   public function run(): void
    {
        // Hier roep je de AdminUserSeeder aan om de admin gebruiker toe te voegen
        $this->call(AdminUserSeeder::class);
    }
}

