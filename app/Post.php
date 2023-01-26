<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];

    public function category(){
        //Funzione di relazione ad una categoria

        //Il post ha una categoria associata
        return $this->belongsTo('App\Category');
    }
}
