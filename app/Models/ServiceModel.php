<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceModel extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        'title',
        'image',
        'short_description',
        'long_description',
    ];
}
