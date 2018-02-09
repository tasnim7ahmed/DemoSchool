<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name','class','teacher_id', 'first_term','second_term', 'third_term',
    ];
}
