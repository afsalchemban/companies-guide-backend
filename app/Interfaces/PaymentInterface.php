<?php

namespace App\Interfaces;

interface PaymentInterface
{
    public function pay();
    public function setAmount($amount);
}
