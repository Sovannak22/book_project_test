<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Relationship between book and category
    public function categories(){
        return $this->belongsTo('App\Category');
    }
    // Relationship between book and store
    public function store(){
        return $this->belongsTo('App\Store');
    }


}
