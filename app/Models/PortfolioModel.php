<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioModel extends Model
{
    use HasFactory;

    protected $table = 'portfolio';

    protected $fillable = [

        'portfolio_id',
        'image',

    ];

    public function heading()
    {
        return $this->belongsTo(PortfolioHeadingModel::class, 'portfolio_id', 'id');
    }

}
