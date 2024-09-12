<?php

namespace Database\Seeders\DependentTableSeeders;

use App\Models\Assessment;
use App\Models\Chapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssessmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = Chapter::all();

        foreach($chapters as $chapter){
            Assessment::factory(1)->create([
                'chapter_id' => $chapter->id,
            ]);
        }
    }
}
