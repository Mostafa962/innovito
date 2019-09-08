<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['course_id', 'title', 'order'];

    public function course()
    {
        return $this->belongsTo('App\Models\Course');
    }

    public function lessons()
    {
        return $this->hasMany('App\Models\Lesson');
    }
}
