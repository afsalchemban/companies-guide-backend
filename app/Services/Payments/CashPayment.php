<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;

class CashPayment implements PaymentInterface
{
    private $amount;
    public function __construct($data)
    {
        $this->amount = $data['amount'];
    }
    public function pay()
    {
        return 'Pay '.$this->amount;
    }
}
