<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['code','detail','exp_date','limit_number_of_use'];

    public function owned_vouchers()
    {
        return $this->hasMany('App\Owned_voucher');
    }

    public function redeemed_vouchers()
    {
        return $this->hasMany('App\Redeemed_voucher');
    }
}
