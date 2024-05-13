<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Lokesh',
            'email' => 'lokesh@gmail.com',
            'password'=>bcrypt('password'),
            'email_verified_at'=>time()
        ]);

          Project::factory()->count(30)->hasTasks(30)->create();

    }
}