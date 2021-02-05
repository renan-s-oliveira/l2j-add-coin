<?php

namespace L2JAddCoin\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Item extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'items';

    protected $primaryKey = 'object_id';

    public $timestamps = false;

    protected $fillable = [
        'owner_id',
        'object_id',
        'item_id',
        'count',
        'enchant_level',
        'loc',
        'loc_data',
        'time_of_use',
        'custom_type1',
        'custom_type2',
        'mana_left',
        'time',
    ];

}
