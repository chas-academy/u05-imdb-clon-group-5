<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Movie extends Model
{
    use HasFactory;
    use Rateable;

    protected $fillable = ['title', 'rating', 'director', 'writer', 'genres', 'description', 'img-url'];

    public function review()
    {
        return $this->belongsTo('App\Models\Review');
    }

    
}
