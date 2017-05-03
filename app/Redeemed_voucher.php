<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeemed_voucher extends Model
{
    protected $fillable = ['redeem_date'];

    public function voucher()
    {
        return $this->belongsTo('App\Voucher');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
