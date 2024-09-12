<?php

namespace Database\Seeders\DependentTableSeeders;

use App\Models\Assessment;
use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $assessments = Assessment::all();

        foreach($assessments as $assessment){
            Question::factory(5)->create([
                'assessment_id' => $assessment->id,
            ]);
        }
    }
}
