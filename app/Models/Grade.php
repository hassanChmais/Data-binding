<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grade extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['name'];

    public function classrooms(){
        return $this->hasMany(Classroom::class);
    }
    public function sections(){
        return $this->hasManyThrough(Section::class , Classroom::class);
    }
    protected static function boot() {
    parent::boot();

    static::deleting(function($grade) {
        $grade->sections()->delete();
        $grade->classrooms()->delete();
    });
}
}
