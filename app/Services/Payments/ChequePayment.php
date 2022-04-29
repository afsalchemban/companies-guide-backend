<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\ChequePayment as ModelsChequePayment;
use App\Models\Package;
use App\Models\Payment;

class ChequePayment implements PaymentInterface
{
    private $amount;
    private $bank_name;
    private $cheque_number;
    private $discount_percentage;
    private $discount_amount;
    private $cheque_image_path;

    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->bank_name = $data['bank_name'];
        $this->cheque_number = $data['cheque_number'];
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
    public function pay($orderId,$amount)
    {
        $chequePayment = new ModelsChequePayment();
        $chequePayment->amount = $this->amount;
        $chequePayment->cheque_number = $this->cheque_number;
        $chequePayment->bank_name = $this->bank_name;
        $chequePayment->cheque_image_path = $this->cheque_image_path;
        $chequePayment->save();


        $payment = new Payment();
        $payment->order_id = $orderId;
        $payment->amount = $amount;
        $payment->status = true;
        $payment->payable()->associate($chequePayment);
        $payment->save();
    }
}
