<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YearProduction extends Model
{
    protected $fillable = [
        'id',
        'year',
        'production'
    ];


    use HasFactory;
}
