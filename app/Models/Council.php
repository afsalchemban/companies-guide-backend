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
}
