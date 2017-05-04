<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeemed_voucher extends Model
{
    protected $fillable = ['redeem_date'];

    public function owned_voucher()
    {
      return $this->belongsTo('App\Owned_voucher');
    }

}
