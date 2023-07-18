<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $fillable=['id','name','email','password','title','photo','created_at','updated_at'];

    public $timestamps=true;

    public  function comments(){
        return $this->hasMany(Comment::class);
    }
}
