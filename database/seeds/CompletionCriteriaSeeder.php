<?php

use App\Models\CompletionCriteria;
use Illuminate\Database\Seeder;

class CompletionCriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompletionCriteria::firstOrCreate([
            'type' => 'Overall Assessments' // Should pass min score for each assessment.
        ]);
        CompletionCriteria::firstOrCreate([
            'type' => 'Final Assessment' // Should pass only completion assessment.
        ]);
        CompletionCriteria::firstOrCreate([
            'type' => 'Videos' // Should pass all videos materials.
        ]);
        CompletionCriteria::firstOrCreate([
            'type' => 'None'
        ]);
    }
}
