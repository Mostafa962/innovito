<?php

use App\Models\LessonType;
use Illuminate\Database\Seeder;

class LessonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LessonType::firstOrCreate([
            'title' => 'text',
        ]);
        LessonType::firstOrCreate([
            'title' => 'image',
        ]);
        LessonType::firstOrCreate([
            'title' => 'text and image',
        ]);
        LessonType::firstOrCreate([
            'title' => 'file',
        ]);
        LessonType::firstOrCreate([
            'title' => 'external content',
        ]);
        LessonType::firstOrCreate([
            'title' => 'internal upload',
        ]);
        LessonType::firstOrCreate([
            'title' => 'scorm',
        ]);
        LessonType::firstOrCreate([
            'title' => 'quiz',
        ]);
    }
}
