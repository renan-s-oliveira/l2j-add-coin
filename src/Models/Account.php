<?php

namespace L2JAddCoin\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Account extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'accounts';

    protected $primaryKey = 'login';

    public $timestamps = false;

    protected $fillable = [
        'login',
    ];
}
