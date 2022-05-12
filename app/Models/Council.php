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
        return $this->hasMany(CouncilGallery::class);
    }
    public function events(){
        return $this->hasMany(CouncilEvents::class);
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
}
