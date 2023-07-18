<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $table='articles';
    protected $fillable=['id','photo','title','partial','content','article_category_id','created_at','updated_at'];
    public $timestamps=true;


    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public  function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function category(){
        return $this->belongsTo(ArticleCategory::class,'article_category_id');
    }
    /*
     function scopeFilter($query , array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags','like','%'. request('tag').'%');
        }
    }*/



}
