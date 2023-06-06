<?php

namespace tag182\tools;

class CurrencyConverter
{
    private float $exchangeRate;

    public function __construct(float $exchangeRate =  15000.00)
    {
        $this->exchangeRate = $exchangeRate;
    }

    public function idrToUsd(float $amount): float
    {
        return $amount / $this->exchangeRate;
    }

    public function usdToIdr(float $amount): float
    {
        return $amount * $this->exchangeRate;
    }
}