<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderLineItem extends Model
{

    // protected $table = ['order_line_items']; 
    
    public function product(){

        return $this->belongsTo('App\Product');

    }

    public function order(){

        return $this->belongsTo('App\Order');

    }

}
