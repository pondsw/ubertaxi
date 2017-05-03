<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Redeemed_discount extends Model
{
    protected $fillable = ['redeem_date'];

    public function voucher()
    {
        return $this->belongsTo('App\Discount');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
