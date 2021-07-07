<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(Review::class, 'review_id');
    }

    public function advertisements()
    {
        return $this->belongsTo(Advertisement::class, 'advertisement_id');
    }
}
