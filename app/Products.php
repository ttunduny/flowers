<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{    
    protected $fillable = [
        'product_name', 'product_description', 'buying_price','selling_price','quantity','status'
    ];
}
