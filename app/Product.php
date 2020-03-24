<?php

namespace App;
use App\Category;
use App\Sales_detail;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $fillable = ['category_id','product_name','product_price','product_stock','explantion',];
    protected $table = 'products';
    protected $primaryKey = 'id';
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function sales_detail()
    {
        return $this->hasMany('App\Sales_detail','product_id','id');
    }
}
