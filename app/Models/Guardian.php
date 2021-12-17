<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = ['email','address',
                           'father_name','father_phone',
                           'father_blood_id','mother_name',
                           'mother_phone','mother_blood_id'];
}
