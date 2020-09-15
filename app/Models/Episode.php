<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    use HasFactory;
    public function serie()
    {
        return $this->belongsTo(Serie::class);
    }
    public function rating()
    {
        return $this->hasMany(Rating::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}
