<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $fillable = [
        'userID', 'name', 'gender','dob', 'roll','role', 'section','shift', 'class','year', 'mother','father', 'contact','address',
    ];
}
