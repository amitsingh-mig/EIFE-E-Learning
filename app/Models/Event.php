<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'time', 'desc', 'linkText', 'linkUrl', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
