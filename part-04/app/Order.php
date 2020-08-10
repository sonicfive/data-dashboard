<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    public function agent(){

        return $this->belongsTo('App\Agent');

    }

    public function lineItems(){

        return $this->hasMany('App\OrderLineItem');

    }

}
