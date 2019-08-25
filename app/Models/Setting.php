<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['logo_id', 'fav_id', 'default_image_employee_id', 'default_image_coordinator_id', 'default_header_employee_id', 'default_header_coordinator_id'];

    public function logo()
    {
        return $this->belongsTo('App\Models\Media', 'logo_id');
    }

    public function fav()
    {
        return $this->belongsTo('App\Models\Media', 'fav_id');
    }

    public function employeeImage()
    {
        return $this->belongsTo('App\Models\Media', 'default_image_employee_id');
    }

    public function coordinatorImage()
    {
        return $this->belongsTo('App\Models\Media', 'default_image_coordinator_id');
    }

    public function employeeHeader()
    {
        return $this->belongsTo('App\Models\Media', 'default_header_employee_id');
    }

    public function coordinatorHeader()
    {
        return $this->belongsTo('App\Models\Media', 'default_header_coordinator_id');
    }

}
