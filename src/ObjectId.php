<?php

namespace L2JAddCoin;

use L2JFacility\Models\Item;
use Illuminate\Support\Facades\Facade;

class ObjectId
{
    public static function create()
    { 
        return Item::max('object_id') + 1000;
    }
}
