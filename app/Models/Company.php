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
        return $this->belongsToMany(Package::class)->using(CompanyPackage::class)->withPivot('id');
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
        return $this->belongsToMany(Package::class)->using(CompanyPackage::class)->withPivot('id')->wherePivot('status', 'active');
    }

    public function companyActivity()
    {
        return $this->belongsTo(CompanyActivity::class);
    }
}
