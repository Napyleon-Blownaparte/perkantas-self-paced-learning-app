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
        User::factory()
            ->count(10)
            ->learner()
            ->create()
            ->each(function ($user) {
                Learner::factory()->create([
                    'user_id' => $user->id,
                ]);
            });

        User::factory()
            ->count(5)
            ->instructor()
            ->create()
            ->each(function ($user) {
                Instructor::factory()->create([
                    'user_id' => $user->id,
                ]);
            });
    }
}
