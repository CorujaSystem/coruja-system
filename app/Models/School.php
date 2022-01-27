<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function students(){
        return $this->hasMany(Student::class);
    }

    public function user(){
        return $this->hasOne(User::class);
    }

    use HasFactory;

    protected $guarded = [];

}
