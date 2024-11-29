<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'name',
        'classification',
        'release_date',
        'general_review',
        'season'
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }
}
