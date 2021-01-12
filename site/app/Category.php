<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='catagory';

    public function products(){
        return $this->hasMany(Product::class,'category_id');
    }


}
