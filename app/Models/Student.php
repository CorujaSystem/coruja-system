<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{

    public function school(){
        return $this->belongsTo(School::class);
    }

    use HasFactory;

    protected $guarded = [];  
}
