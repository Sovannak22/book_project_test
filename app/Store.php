<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    // Relationship between store and store type
    public function store_types(){
        return $this->belongTo('App\StoreType');
    }
    // Relationship between store and books
    public function books(){
        return $this->hasMany('App\Book');
    }
}
