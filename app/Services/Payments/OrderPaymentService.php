<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\Company;
use App\Models\Order;
use App\Models\Payment;
use App\Services\Company\CompanyRegistrationFromCache;

class OrderPaymentService
{
    protected $paymentInterface;
    protected $company;
    protected $subscription;
    public $order;

    public function __construct(Company $company, PaymentInterface $paymentInterface, $subscription)
    {
        $this->company = $company;
        $this->paymentInterface = $paymentInterface;
        $this->subscription = $subscription;
    }
    private function _createOrder($payment){
        $this->order = new Order([
            'subscription_id' => $this->subscription->id,
            'company_id' => $this->company->id,
            'package_id' => $this->subscription->package_id,
            'discount_percentage' => $this->paymentInterface->getDiscountPercentage(),
            'discount_amount' => $this->paymentInterface->getDiscountAmount(),
            'net_total' => $this->paymentInterface->getAmount(),
        ]);
        $this->order->payable()->associate($payment);
        $this->order->save();
    }
    private function _createPayment(){
        return $this->paymentInterface->addPaymentType(); 
    }
    public function pay()
    {
        $this->_createOrder($this->_createPayment());
        return $this;
    }
    public function updateInvoicePathToOrder($path){

        $this->order->invoice_file_path = $path;
        $this->order->save();
    }
}
