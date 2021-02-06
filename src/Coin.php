<?php

namespace L2JAddCoin;

use L2JAddCoin\ObjectId;
use L2JFacility\Models\Item;

class Coin
{
    public static function add($idChar, $count, $loc = 'WAREHOUSE') 
    { 
        return Item::create(['owner_id' => $idChar, 'item_id' => config('l2jfacility.coin_id'), 'count' => $count, 'object_id' => ObjectId::create() + 1000, 'loc' => $loc]);
    }
}
