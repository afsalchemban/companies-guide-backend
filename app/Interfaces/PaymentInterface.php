<?php

namespace App\Interfaces;

interface PaymentInterface
{
    public function addPaymentType();
    public function getAmount();
    public function getDiscountPercentage();
    public function getDiscountAmount();
}
