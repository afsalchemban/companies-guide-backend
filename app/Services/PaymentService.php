<?php

namespace App\Services;

use App\Interfaces\PaymentInterface;

class PaymentService
{
    public function pay(PaymentInterface $payment)
    {
        $payment->pay();
    }
}
