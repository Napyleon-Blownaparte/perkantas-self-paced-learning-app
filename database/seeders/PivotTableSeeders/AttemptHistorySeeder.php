<?php

namespace Database\Seeders\PivotTableSeeders;

use App\Models\Assessment;
use App\Models\Learner;
use App\Models\AttemptHistory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class AttemptHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $learners = Learner::all();
        $allAssessmentIds = Assessment::pluck('id')->toArray();

        foreach ($learners as $learner) {
            $numberOfAssessments = min(rand(3, 9), count($allAssessmentIds));
            $someAssessmentIds = Arr::random($allAssessmentIds, $numberOfAssessments);

            foreach ($someAssessmentIds as $id) {
                $learner->attempt_histories()->create([
                    'assessment_id' => $id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
