<?php

namespace App\Interfaces;

interface PaymentInterface
{
    public function pay($orderId,$amount);
    public function getAmount();
    public function getDiscountPercentage();
    public function getDiscountAmount();
}
