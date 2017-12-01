<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //    
    protected $fillable = [
        'order_id','mode_id', 'payment_amount', 'payment_discount','status'
    ];
}
