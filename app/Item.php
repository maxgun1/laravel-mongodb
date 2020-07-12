<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use Kyslik\ColumnSortable\Sortable;

class Item extends Eloquent
{
    use Sortable;
    protected $connection = 'mongodb_conn';
    protected $collection = 'listings';
    
    protected $fillable = [
        'title', 
        'timePosted', 
        'itemId', 
        'price'
    ];
    
    public $sortable = [
        'title', 
        'timePosted', 
        'itemId', 
        'price'
    ];
}