<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Kyslik\ColumnSortable\Sortable;

class Item extends Eloquent
{
    use Sortable;
    protected $connection = 'mongodb_clever';
    protected $collection = 'listings';

    protected $searchable = [
        'title', 
        'timePosted', 
        'itemId', 
        'price'
    ];
    protected $fillable = [
        'title', 
        'timePosted', 
        'itemId', 
        'price'
    ];
    
    public $sortable = [
        'title', 
        'itemId',
        'timePosted'
    ];
}