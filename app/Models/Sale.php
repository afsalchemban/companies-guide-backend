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
        return $this->morphOne(User::class, 'imageable');
    }

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
