<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    //use HasFactory;
    protected $table = 'employee';


    protected $fillable = ['name', 'email'];


}
