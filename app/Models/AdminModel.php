<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class AdminModel extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'admin'; // your table name

    protected $fillable = [
        'email',
        'password',
        'in_hash',
    ];

    // Hide password when model is converted to array/json
    protected $hidden = [
        'password',
    ];
}
