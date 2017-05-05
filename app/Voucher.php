<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = ['point','detail','exp_date','limit_number_of_use','image_path'];

    public function owned_vouchers()
    {
        return $this->hasMany('App\Owned_voucher');
    }

}
