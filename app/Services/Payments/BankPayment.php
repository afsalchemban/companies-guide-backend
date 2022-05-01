<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\BankPayment as ModelsBankPayment;
use App\Models\Package;
use App\Models\Payment;

class BankPayment implements PaymentInterface
{
    private $amount;
    private $discount_percentage;
    private $reference_number;
    private $discount_amount;
    private $bank_name;
    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->reference_number = $data['reference_number'];
        $this->discount_percentage = $data['discount_percentage'];
        $this->bank_name = $data['bank_name'];
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
        $bankPayment = new ModelsBankPayment;
        $bankPayment->bank_name = $this->bank_name;
        $bankPayment->reference_number = $this->reference_number;
        $bankPayment->amount = $this->amount;
        $bankPayment->save();
        return $bankPayment;
    }
}
