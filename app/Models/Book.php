<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function Author(){
        return $this->belongsTo('App\Models\Author');
    }
}
