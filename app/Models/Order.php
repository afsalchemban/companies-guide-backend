<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function payable()
    {
        return $this->morphTo();
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
