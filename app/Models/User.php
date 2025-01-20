<?php

// app/Models/User.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
    ];

    // Relationship: A user can have many trips
    public function trips()
    {
        return $this->hasMany(Trip::class);
    }

    // Hide sensitive data like password
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Hash the password automatically before storing it
    public static function boot()
    {
        parent::boot();
        static::creating(function ($user) {
            $user->password = bcrypt($user->password);
        });
    }
}
