<?php

namespace Database\Seeders\IndependentTableSeeders;

use App\Models\User;
use App\Models\Learner;
use App\Models\Instructor;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Seeder untuk Learner
        User::factory()
            ->count(10)
            ->learner() // Set role sebagai learner
            ->create()
            ->each(function ($user) {
                // Buat detail learner di tabel learners
                Learner::factory()->create([
                    'user_id' => $user->id, // Hubungkan user_id
                ]);
            });

        // Seeder untuk Instructor
        User::factory()
            ->count(5)
            ->instructor() // Set role sebagai instructor
            ->create()
            ->each(function ($user) {
                // Buat detail instructor di tabel instructors
                Instructor::factory()->create([
                    'user_id' => $user->id, // Hubungkan user_id
                ]);
            });
    }

}
