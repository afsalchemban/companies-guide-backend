<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;

class BankPayment implements PaymentInterface
{
    private $amount;
    private $reference_number;
    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->reference_number = $data['reference_number'];
    }
    public function pay()
    {
        return 'Pay '.$this->amount;
    }
}
