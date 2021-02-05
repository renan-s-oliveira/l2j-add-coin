<?php

namespace L2JAddCoin;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

class Coin extends Model {

    protected static function add($id, $idChar) { 
        return App\Models\Str::studly(config('l2jcoin.model')); 
    }

}