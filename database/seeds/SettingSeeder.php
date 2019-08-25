<?php

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = Setting::create([
            'logo_id' => NULL,
            'fav_id' => NULL,
            'default_image_employee_id' => NULL,
            'default_image_coordinator_id' => NULL,
            'website_title' => 'Innovito',
        ]);

    }
}
