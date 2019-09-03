<?php

use App\Models\CourseType;
use Illuminate\Database\Seeder;

class CourseTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseType::firstOrCreate([
            'type' => 'Self Paced',
        ]);
        CourseType::firstOrCreate([
            'type' => 'Instructor Led',
        ]);

    }
}
