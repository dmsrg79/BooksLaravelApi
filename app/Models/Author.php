<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name', 'birth_year'];

    public function Book()
    {
        return $this->hasMany('App\Models\Book');
    }
}
