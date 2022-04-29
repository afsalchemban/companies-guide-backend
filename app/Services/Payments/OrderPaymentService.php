<?php

namespace App\Services\Payments;

use App\Interfaces\PaymentInterface;
use App\Models\Company;
use App\Services\Company\CompanyRegistrationFromCache;

class OrderPaymentService
{
    protected $payment;
    protected $company;
    protected $subscription;
    protected $order;
    public function setPayment(PaymentInterface $payment)
    {
        $this->payment = $payment;
        return $this;
    }
    public function setCompany(Company $company)
    {
        $this->company = $company;
        return $this;
    }
    public function setSubscription($subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }
    public function pay()
    {
        $this->payment->pay($this->order->id,$this->payment->getAmount());
    }
    public function createOrder(){
        $this->order = $this->subscription->order()->create([
            'subscription_id' => $this->subscription->id,
            'company_id' => $this->company->id,
            'package_id' => $this->subscription->package_id,
            'discount_percentage' => $this->payment->getDiscountPercentage(),
            'discount_amount' => $this->payment->getDiscountAmount(),
            'net_total' => $this->payment->getAmount(),
        ]);
        return $this;
    }
}
