<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PortfolioCategory extends Model
{
    protected  $table="portfolio_categories";
    protected  $fillable=['id','name'];
    public $timestamps=false;
    use HasFactory;

    public  function portfolio(){
        return $this->hasMany('App\Models\portfolio','portfolio_categories_id','id');
    }
}
