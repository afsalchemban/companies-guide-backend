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

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function companyActivity()
    {
        return $this->belongsTo(CompanyActivity::class);
    }
}
