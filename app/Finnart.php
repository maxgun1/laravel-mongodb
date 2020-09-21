<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Kyslik\ColumnSortable\Sortable;


class Finnart extends Eloquent
{
    use Sortable;
    protected $connection = 'mongodb_clever';
    protected $collection = 'weblistings';

    protected $searchable = [
        'title', 
        'timePosted', 
        'url', 
        'price'
    ];
    protected $fillable = [
        'title', 
        'timePosted', 
        'url', 
        'price'
    ];
    
    public $sortable = [
        'title', 
        'url',
        'price',
        'timePosted'
    ];
}
