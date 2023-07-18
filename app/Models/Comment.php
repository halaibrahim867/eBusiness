<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table="comments";
    protected  $fillable=['id','content','article_id','user_id','created_at','updated_at'];
    public $timestamps=true;

    public function articles(){
        return $this->belongsTo(Article::class);
    }
    public  function user(){
        return $this->belongsTo(User::class);
    }
}
