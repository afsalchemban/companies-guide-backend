<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->morphOne(User::class, 'imageable');
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }

    public function subscriptions()
    {
        return $this->hasManyThrough(Subscription::class, Company::class);
    }

    public function orderswithdeep()
    {
        return $this->hasManyDeep(Order::class,[Company::class,Subscription::class],['sale_id','company_id','subscription_id'],['id','id','id']);
    }
    public function orders()
    {
        return $this->hasManyThrough(Order::class, Company::class,'sale_id','company_id','id','id');
    }
}
