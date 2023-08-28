<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Book extends Eloquent
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'books';

    protected $fillable = [
        'name', 'detail'
    ];

}
