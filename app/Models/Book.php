<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['author_id', 'title', 'release_year'];
    public function Author(){
        return $this->belongsTo('App\Models\Author');
    }
}
