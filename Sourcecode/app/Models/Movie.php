<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'image', 
        'rating', 
        'production', 
        'director', 
        'release_date', 
        'age_restriction', 
        'duration', 
        'synopsis', 
        'status'
    ];

    protected $casts = [
        'release_date' => 'date',
        'rating' => 'string',
    ];

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre');
    }

    public function getFormattedDurationAttribute()
    {
        $hours = intdiv($this->duration, 60);
        $minutes = $this->duration % 60;
        return sprintf('%dh %dm', $hours, $minutes);
    }
}
