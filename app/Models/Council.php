<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Council extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['created_at','updated_at'];

    public function members(){
        return $this->hasMany(CouncilMember::class);
    }
    public function companies(){
        return $this->hasMany(CouncilCompany::class);
    }
    public function medias(){
        return $this->hasMany(CouncilMedia::class);
    }
    public function events(){
        return $this->hasMany(CouncilEvent::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function city(){
        return $this->belongsTo(City::class);
    }
    public function area(){
        return $this->belongsTo(Area::class);
    }
    public function images()
    {
        return $this->morphMany(Image::class, 'imageble');
    }
}
