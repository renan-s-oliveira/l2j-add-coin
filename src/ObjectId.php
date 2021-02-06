<?php

namespace L2JAddCoin;

use L2JAddCoin\Models\Item;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Eloquent\Model;

class ObejectId extends Model
{
    public static function create() :int
    { 
        return Item::max('object_id');
    }
}