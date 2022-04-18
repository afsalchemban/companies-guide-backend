<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
    public function companiess()
    {
        return $this->belongsToMany(Company::class)->as('subscriptions')->withPivot('package_id', 'start_date', 'end_date');
    }
}
