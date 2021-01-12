<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    public $timestamps  = false;
    public function Images(){
      return  $this->hasOne(Image::class,'product_id');
    }

}
