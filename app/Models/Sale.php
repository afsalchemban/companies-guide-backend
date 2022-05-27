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
        return $this->morphOne(User::class, 'userable');
    }

    public function companies()
    {
        return $this->morphMany(Company::class, 'companiable');
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
        return $this->hasManyThrough(Order::class, Company::class,'companiable_id','company_id','id','id')->where('companiable_type', 'sale');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageble');
    }
}
