<?php

namespace App;
use App\Sales;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $fillable = ['first_name','last_name','phone','email','street','city','state','zip_code','customer_status'];
    protected $table = 'customers';
    protected $primaryKey = 'id';

    public function sales()
    {
        return $this->hasMany('App\Sales','customer_id','id');
    }
}
