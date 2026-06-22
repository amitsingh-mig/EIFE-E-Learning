<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Course extends Model
{
    protected $fillable = [
        'slug', 'university_id', 'univ_name', 'univ_logo',
        'title', 'thumbnail', 'category', 'sub_subject',
        'language', 'type', 'status', 'start_date', 'end_date', 'desc',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date'   => 'date',
    ];

    public function university()
    {
        return $this->belongsTo(University::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}
