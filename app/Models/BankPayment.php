<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankPayment extends Model
{
    use HasFactory;

    public function payment()
    {
        return $this->morphOne(Payment::class, 'payable');
    }
}
