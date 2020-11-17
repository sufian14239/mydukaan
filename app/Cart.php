<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id','image', 'name', 'quantity', 'price', 'size', 'color', 'total'
    ];
}
