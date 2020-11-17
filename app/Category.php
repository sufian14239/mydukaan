<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable=['name','image'];

    function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    function menu(){
        return $this->hasMany(Menu::class);
    }

    function products(){
        return $this->hasMany(Product::class);
    }
}
