<?php

namespace Database\Seeders\DependentTableSeeders;

use App\Models\Chapter;
use App\Models\Material;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $chapters = Chapter::all();

        foreach($chapters as $chapter){
            Material::factory(rand(3, 10))->create([
                'chapter_id' => $chapter->id,
            ]);
        }
    }
}
