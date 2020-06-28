<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Sechdule extends Model
{
    //
    public $table = "schudles";

    protected  $fillable = [
        'friday' , 'saturday' , 'sunday' , 'monday' , 'tuesday' ,'wednesday' ,'thursday',
    ] ;
    protected $hidden = [
        'created_at' , 'updated_at' ,
    ];

}
