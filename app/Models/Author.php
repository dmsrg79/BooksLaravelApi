<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    public function Book() {
        return $this->hasMany('App\Models\Book');
    }
}
