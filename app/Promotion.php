<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = ['name','detail','start_date','exp_date','image_path'];

    public function discount()
    {
        return $this->hasOne('App\Discount');
    }
}
