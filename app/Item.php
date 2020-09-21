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
        'totalSold',
        'price'
    ];
    protected $fillable = [
        'title', 
        'timePosted', 
        'itemId', 
        'totalSold',
        'price'
    ];
    
    public $sortable = [
        'title', 
        'itemId',
        'totalSold',
        'timePosted'
    ];
}