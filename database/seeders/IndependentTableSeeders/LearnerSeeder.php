<?php

namespace Database\Seeders\IndependentTableSeeders;

use App\Models\Learner;
use Illuminate\Database\Seeder;

class LearnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Learner::factory(10)->create();
    }
}
