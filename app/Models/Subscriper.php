<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriper extends Model
{
    use HasFactory;
    protected $table="subscripers";
    protected $fillable=['id','name','email','image','created_at','updated_at'];

    public $timestamps=false;

    public  function hasComments(){
        return $this->hasMany('App\Models\Comment','id','id');
    }


}
