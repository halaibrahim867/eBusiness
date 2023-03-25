<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected  $table="portfolios";
    protected $fillable=['id','name','description','photo','portfolio_categories_id','created_at','updated_at'];
    public $timestamps=true;
    use HasFactory;

    public  function portfolioCategory(){
        return $this->belongsTo('App\Models\portfolioCategory','portfolio_categories_id','id');
    }
}
