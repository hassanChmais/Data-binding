<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classroom extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['grade_id','name'];

    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function sections(){
        return $this->hasMany(Section::class);
    }

    protected static function boot() {
    parent::boot();

    static::deleting(function($classroom) {
        $classroom->sections()->delete();
    });
}
}
