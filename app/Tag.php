<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){

        //I tag possono essere associati a più post
        return $this->belongsToMany('App\Post');
    }
}
