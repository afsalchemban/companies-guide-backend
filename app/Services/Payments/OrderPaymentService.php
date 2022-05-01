<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\Company;
use App\Models\Payment;
use App\Services\Company\CompanyRegistrationFromCache;

class OrderPaymentService
{
    protected $paymentInterface;
    protected $company;
    protected $subscription;
    protected $order;

    public function __construct(Company $company, PaymentInterface $paymentInterface, $subscription)
    {
        $this->company = $company;
        $this->paymentInterface = $paymentInterface;
        $this->subscription = $subscription;
    }
    private function _createOrder(){
        $this->order = $this->subscription->order()->create([
            'subscription_id' => $this->subscription->id,
            'company_id' => $this->company->id,
            'package_id' => $this->subscription->package_id,
            'discount_percentage' => $this->paymentInterface->getDiscountPercentage(),
            'discount_amount' => $this->paymentInterface->getDiscountAmount(),
            'net_total' => $this->paymentInterface->getAmount(),
        ]);
    }
    private function _createPayment(){
        $payment = $this->paymentInterface->addPaymentType(); 
        $this->order->payable()->associate($payment);
        $this->order->save();
    }
    public function pay()
    {
        $this->_createOrder();
        $this->_createPayment();
    }
}
