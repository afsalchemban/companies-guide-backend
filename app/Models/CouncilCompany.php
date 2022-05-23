<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CouncilCompany extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function companyActivity()
    {
        return $this->morphToMany(CompanyActivity::class, 'activitable');
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageble');
    }
}
