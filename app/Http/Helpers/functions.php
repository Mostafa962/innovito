<?php
use App\Models\Setting;


if (! function_exists('trimString')) {
    function trimString($string) {
        $string = strtolower($string);
        //Make alphanumeric (removes all other characters)
        $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
        //Clean up multiple dashes or whitespaces
        $string = preg_replace("/[\s-]+/", " ", $string);
        //Convert whitespaces and underscore to dash
        $string = preg_replace("/[\s_]/", "-", $string);
        return $string;

    }
}

if (! function_exists('logo')) {
    function logo() {
        $setting = Setting::first();
        return $setting->logo;
    }
}

if (! function_exists('fav')) {
    function fav() {
        $setting = Setting::first();
        return $setting->fav;
    }
}

if (! function_exists('employeeDefaultImage')) {
    function employeeDefaultImage() {
        $setting = Setting::first();
        return $setting->employeeImage;
    }
}

if (! function_exists('coordinatorDefaultImage')) {
    function coordinatorDefaultImage() {
        $setting = Setting::first();
        return $setting->coordinatorImage;
    }
}

if (! function_exists('employeeDefaultHeader')) {
    function employeeDefaultHeader() {
        $setting = Setting::first();
        return $setting->employeeHeader;
    }
}

if (! function_exists('coordinatorDefaultHeader')) {
    function coordinatorDefaultHeader() {
        $setting = Setting::first();
        return $setting->coordinatorHeader;
    }
}

?>
