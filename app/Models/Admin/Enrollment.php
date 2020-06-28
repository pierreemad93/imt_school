<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    protected $fillable =[
        'name' , 'email' ,'phone' ,'coursename' , 'pending',
    ];

    protected $hidden = [
        'created_at' , 'updated_at' ,
    ];
}
