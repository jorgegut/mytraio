<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model 
{
    protected $fillable = [
        'title','url','content','author_id'
    ];
}