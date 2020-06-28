<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'course_name' , 'user_id',
    ];

    protected $hidden = [
        'created_at' , 'updated_at' ,
    ];
}
