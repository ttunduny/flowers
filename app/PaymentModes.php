<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentModes extends Model
{
 
    protected $fillable = [
        'mode_name', 'mode_description', 'mode_code','status'
    ];
}
