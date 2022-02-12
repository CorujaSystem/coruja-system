<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class School extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }

    protected static function boot(){
        parent::boot();

        static::deleted(function ($school){
            $school->students->each(function ($student) {
                $student->delete();
            });
        });
    }
}
