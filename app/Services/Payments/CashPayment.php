<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\CashPayment as ModelsCashPayment;
use App\Models\Package;
use App\Models\Payment;

class CashPayment implements PaymentInterface
{
    private $amount;
    private $discount_percentage;
    private $discount_amount;
    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->discount_percentage = $data['discount_percentage'];
        $this->discount_amount = $data['discount_amount'];
    }
    public function getDiscountPercentage()
    {
        return $this->discount_percentage;
    }
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }
    public function getAmount()
    {
        return $this->amount;
    }
    public function addPaymentType()
    {
        $cashPayment = new ModelsCashPayment();
        $cashPayment->amount = $this->amount;
        $cashPayment->save();
        return $cashPayment;
    }
}
