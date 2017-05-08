<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type', 'point','avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function owned_vouchers()
    {
        return $this->hasMany('App\Owned_voucher');
    }

    public function redeemed_discounts()
    {
        return $this->hasMany('App\Redeemed_discount');
    }

    public function isAdmin(){
      if( $this->type == 'admin'){
        return true;
      }
      else{
        return false;
      }
    }
}
