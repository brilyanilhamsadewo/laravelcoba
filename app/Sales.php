<?php

namespace App;
use App\Sales_detail;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    //
    public function sales_detail()
    {
        return $this->hasMany('App\Sales_detail','nota_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User','user_id','user');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer','customer_id','id');
    }
}
