<?php

namespace L2JAddCoin\Facades;

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Str;

class Coin extends Facade {

    protected static function add($id, $idChar) { 
        return App\Models\Str::studly(config('app.model')); 
    }

}