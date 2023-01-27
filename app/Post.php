<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
        'category_id'
    ];

    public function category(){
        //Funzione di relazione ad una categoria

        //Il post ha una categoria associata
        return $this->belongsTo('App\Category');
    }

    public function tags(){
        //Funzione di relazione ad più tag

        //Il post ha più tag associati
        return $this->belongsToMany('App\Tag');
    }
}
