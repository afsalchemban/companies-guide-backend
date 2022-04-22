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

    public function companyPackages()
    {
        return $this->hasManyThrough(CompanyPackage::class, Company::class);
    }

    public function orders()
    {
        return $this->hasManyDeep(Order::class,[Company::class,CompanyPackage::class],['sale_id','company_id','company_package_id'],['id','id','id']);
    }
}
