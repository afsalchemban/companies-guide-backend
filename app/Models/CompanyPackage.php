<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CompanyPackage extends Pivot
{

    protected $table = 'company_package';
    public $incrementing = true;
    
    public function payment()
    {
        return $this->hasOne(Payment::class,'company_package_id');
    }
}
