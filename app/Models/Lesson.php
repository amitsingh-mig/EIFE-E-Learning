<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['string_id', 'title', 'duration', 'video_url', 'video_type', 'module_id'];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
