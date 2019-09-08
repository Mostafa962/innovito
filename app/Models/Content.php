<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = ['lesson_id', 'image', 'video_filename', 'video_duration', 'localvideo_link', 'external_link'];

    public function lesson()
    {
        return $this->belongsTo('App\Models\Lesson');
    }

}
