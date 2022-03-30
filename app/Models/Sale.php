<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->morphToMany(User::class, 'userable');
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
