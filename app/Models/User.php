<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */    
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', // Set here to make update possible in adminpanel (Backpack) for is_admin attribute in DB.
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // A mutator that hash a password created in adminpanel (Backpack).
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = Hash::make($value);
    }

    // Relationships
    public function watchlist(){
        return $this->hasOne('App\Models\Watchlist');
    }

    public function review(){
        return $this->hasMany('App\Models\Review');
    }
}
