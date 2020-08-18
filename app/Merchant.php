<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $fillable = [
        'merchant_id',
    ];
   
    public function Signup()
    {
        return $this->belongsTo('App\Signup');
    }
}
