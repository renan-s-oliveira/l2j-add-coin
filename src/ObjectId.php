<?php

namespace L2JAddCoin;

use L2JAddCoin\Models\Item;
use Illuminate\Support\Facades\Facade;

class ObjectId
{
    public static function create() :int
    { 
        return Item::max('object_id');
    }
}