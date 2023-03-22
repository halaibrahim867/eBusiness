<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public  function articles(){
        return $this->hasMany('App\Models\Article','employee_id','id');
    }

}
