<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioHeadingModel extends Model
{
    use HasFactory;

    protected $table = 'portfolio_heading';
    protected $fillable = ['title'];
    
}
