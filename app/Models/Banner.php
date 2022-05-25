<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function images()
    {
        return $this->morphMany(Image::class, 'imageble');
    }
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
