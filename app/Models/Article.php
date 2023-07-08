<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table='articles';
    protected $fillable=['id','photo','title','content','team_id','created_at','updated_at'];
    public $timestamps=true;


}
