<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\ChequePayment as ModelsChequePayment;
use App\Models\Package;
use App\Models\Payment;
use Illuminate\Support\Facades\Storage;

class ChequePayment implements PaymentInterface
{
    private $amount;
    private $bank_name;
    private $cheque_number;
    private $discount_percentage;
    private $discount_amount;
    private $cheque_image;
    private $cheque_image_path;

    public function __construct($data)
    {
        $this->amount = $data['amount'];
        $this->bank_name = $data['bank_name'];
        $this->cheque_number = $data['cheque_number'];
        $this->discount_percentage = $data['discount_percentage'];
        $this->discount_amount = $data['discount_amount'];
        $this->cheque_image = $data['cheque_image'];
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
    private function _uploadChequeImage()
    {
        return Storage::putFile('companies/payment/cheques', $this->cheque_image);
    }
    public function addPaymentType()
    {
        $chequePayment = new ModelsChequePayment();
        $chequePayment->amount = $this->amount;
        $chequePayment->cheque_number = $this->cheque_number;
        $chequePayment->bank_name = $this->bank_name;
        $chequePayment->cheque_image_path = $this->_uploadChequeImage();
        $chequePayment->save();
        return $chequePayment;
    }
}
