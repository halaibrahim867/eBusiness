<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table="teams";
    protected $fillable=['id','name','photo','photo_path','job_description','facebook_account','instagram_account','twitter_account'];
    public $timestamps=true;




}
