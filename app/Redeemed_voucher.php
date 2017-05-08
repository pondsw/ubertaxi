<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeemed_voucher extends Model
{
    protected $fillable = ['user_id','voucher_id','redeem_date'];

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function owned_voucher()
    {
      return $this->belongsTo('App\Owned_voucher');
    }

    public function voucher()
    {
      return $this->belongsTo('App\Voucher');
    }

}
