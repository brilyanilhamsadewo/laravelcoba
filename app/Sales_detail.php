<?php

namespace App;
use App\Product;
use App\Sales;
use Illuminate\Database\Eloquent\Model;

class Sales_detail extends Model
{
    //
    public function product()
    {
        return $this->belongsTo('App\Product','product_id','id');
    }

    public function sales()
    {
        return $this->belongsTo('App\Sales','nota_id','id');
    }
}
