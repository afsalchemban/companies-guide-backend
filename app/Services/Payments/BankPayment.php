<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;

class BankPayment implements PaymentInterface
{
    private $amount;
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    public function pay()
    {
        return 'Pay '.$this->amount;
    }
}
