<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['classroom_id' , 'name'];

    public function classroom(){

        return $this->belongsTo(Classroom::class);
    }
}
