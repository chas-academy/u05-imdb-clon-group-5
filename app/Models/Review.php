<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['review-title', 'review-text'];

    public function movies()
    {
        return $this->hasMany('App\Models\Movie');
    }
}
