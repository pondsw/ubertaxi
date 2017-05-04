<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owned_voucher extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function voucher()
    {
        return $this->belongsTo('App\Voucher');
    }

    public function redeemed_voucher(){
        return $this->hasMany('App\Redeemed_voucher');
    }
}
