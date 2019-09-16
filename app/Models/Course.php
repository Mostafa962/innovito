<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['user_id', 'category_id', 'course_type_id', 'completion_criteria_id', 'title', 'slug', 'language', 'image', 'certificate', 'description', 'published', 'approved', 'expired_at'];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function users()
    {
        return $this->belongsToMany('App\User', 'course_user', 'course_id', 'user_id')->withTimestamps();
    }

    public function coordinator()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function sections()
    {
        return $this->hasMany('App\Models\Section');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\CourseType', 'course_type_id');
    }
}
