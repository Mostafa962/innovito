<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['user_id', 'category_id', 'course_type_id', 'completion_criteria_id', 'title', 'slug', 'language', 'image', 'certificate', 'description', 'published', 'approved', 'expired_at'];

}
