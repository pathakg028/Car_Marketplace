<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsTo(User::class, 'bookmark_id');
    }
    public function advertisements()
    {
        return $this->belongsTo(Advertisement::class, 'advertisement_id');
    }
}
