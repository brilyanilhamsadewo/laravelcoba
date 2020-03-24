<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['category_name'];
    protected $table = 'categories';
    protected $primaryKey = 'id';
    
    public function product()
    {
        return $this->hasMany('App\Product','category_id','id');
    }


}
