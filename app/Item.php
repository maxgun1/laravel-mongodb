<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Item extends Eloquent
{
    protected $connection = 'mongodb_conn';
    protected $collection = 'listings';

    protected $fillable = [
        'title', 'description','location'
    ];
}