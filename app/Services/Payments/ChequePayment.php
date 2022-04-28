<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;

class ChequePayment implements PaymentInterface
{
    private $amount;
    private $bank_name;
    private $cheque_number;
    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->amount = $data['bank_name'];
        $this->amount = $data['cheque_number'];
    }
    public function pay()
    {
        return 'Pay '.$this->amount;
    }
}
