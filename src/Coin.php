<?php

namespace L2JAddCoin;

use Illuminate\Support\Str;
use L2JAddCoin\Models\Account;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    public static function add($id, $idChar) { 
        return Account::all(); 
    }

}