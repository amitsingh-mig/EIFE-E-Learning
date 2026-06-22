<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class University extends Model
{
    protected $fillable = [
        'slug', 'country', 'abbr', 'name', 'url', 'url_label',
        'logo', 'founded', 'location', 'email', 'phone', 'desc',
    ];

    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
