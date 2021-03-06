<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Subscription extends Pivot
{
    protected $table = 'subscription';
    public $timestamps = false;
    public $incrementing = true;
    
    public function order()
    {
        return $this->hasOne(Order::class,'subscription_id');
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
