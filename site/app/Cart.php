<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public $timestamps  = false;
    protected $table = "carts";


    public function Products(){
        return $this->belongsToMany(Product::class,Cart_Products::class);

    }
}
