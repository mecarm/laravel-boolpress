<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
        //Funzione di relazione a molti post

        //La categoria ha molti post associati
        return $this->hasMany('App\Post');
    }
}
