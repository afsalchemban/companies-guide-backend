<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $hidden = ['created_at','updated_at'];
    
    public function user()
    {
        return $this->morphOne(User::class, 'imageable');
    }

    public function sale()
    {
        return $this->belongsTo(Sale::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class)->as('subscriptions')->withPivot('status','end_date');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function activePackage()
    {
        return $this->belongsToMany(Package::class)->as('subscriptions')->using(CompanyPackage::class)->withPivot('end_date','status')->wherePivot('status', 'active');
    }

    public function expiredPackages()
    {
        return $this->belongsToMany(Package::class)->as('subscriptions')->using(CompanyPackage::class)->withPivot('end_date','status')->wherePivot('status', 'expired');
    }

    public function companyActivity()
    {
        return $this->belongsTo(CompanyActivity::class);
    }

    public function orders()
    {
        return $this->hasManyThrough(Order::class, CompanyPackage::class,'company_id','company_package_id','id','id');
    }
}
