<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Subscription extends Pivot
{

    public $incrementing = true;
    
    public function order()
    {
        return $this->hasOne(Order::class,'subscription_id');
    }
}
