<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['section_id', 'lesson_type_id', 'title', 'description', 'order', 'score'];

    public function section()
    {
        return $this->belongsTo('App\Models\Section');
    }

    public function lessonType()
    {
        return $this->belongsTo('App\Models\LessonType');
    }

    public function content()
    {
        return $this->hasOne('App\Models\Content');
    }
}
