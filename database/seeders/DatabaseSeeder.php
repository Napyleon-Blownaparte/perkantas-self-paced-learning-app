<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\LearnersAnswer;
use App\Models\MultipleChoiceOption;
use Database\Seeders\DependentTableSeeders\AssessmentSeeder;
use Database\Seeders\DependentTableSeeders\ChapterSeeder;
use Database\Seeders\DependentTableSeeders\MaterialSeeder;
use Database\Seeders\DependentTableSeeders\MultipleChoiceOptionSeeder;
use Database\Seeders\DependentTableSeeders\QuestionSeeder;
use Database\Seeders\IndependentTableSeeders\CourseSeeder;
use Database\Seeders\IndependentTableSeeders\InstructorSeeder;
use Database\Seeders\IndependentTableSeeders\LearnerSeeder;
use Database\Seeders\PivotTableSeeders\AttemptHistorySeeder;
use Database\Seeders\PivotTableSeeders\CourseInstructorSeeder;
use Database\Seeders\PivotTableSeeders\EnrollmentSeeder;
use Database\Seeders\PivotTableSeeders\LearnersAnswerSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            LearnerSeeder::class,
            CourseSeeder::class,
            EnrollmentSeeder::class,
            InstructorSeeder::class,
            CourseInstructorSeeder::class,
            ChapterSeeder::class,
            AssessmentSeeder::class,
            MaterialSeeder::class,
            AttemptHistorySeeder::class,
            QuestionSeeder::class,
            MultipleChoiceOptionSeeder::class,
            LearnersAnswerSeeder::class,
        ]);
    }
}
