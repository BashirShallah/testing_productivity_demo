<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function scopeMostPopular($query){
        $query->orderBy('views', 'desc');
    }
}
