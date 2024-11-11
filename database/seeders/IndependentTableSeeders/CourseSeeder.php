<?php

namespace Database\Seeders\IndependentTableSeeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Course::factory()
        ->count(10)
        ->has(\App\Models\CourseOutcome::factory()->count(5))
        ->create();
    }
}
