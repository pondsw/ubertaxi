<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $fillable = ['code','amount','limit_number_of_use'];

    public function promotion()
    {
        return $this->belongsTo('App\Promotion');
    }

    public function redeemed_discounts()
    {
        return $this->hasMany('App\Redeemed_discount');
    }
}
