<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owned_voucher extends Model
{

    protected $fillable = ['user_id','voucher_id','code'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function voucher()
    {
        return $this->belongsTo('App\Voucher');
    }

    public function redeemed_voucher(){
        return $this->hasOne('App\Redeemed_voucher');
    }
}
