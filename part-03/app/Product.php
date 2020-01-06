<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public function orderItem(){

        return $this->belongsTo('App\OrderLineItem');

    }

}
