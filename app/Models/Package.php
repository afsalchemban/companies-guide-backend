<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function activeCompanies()
    {
        return $this->belongsToMany(Company::class,'subscription')->as('subscriptions')->using(Subscription::class)->withPivot('end_date','status')->wherePivot('status', 'active');
    }
}
