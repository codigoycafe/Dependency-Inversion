<?php

namespace App;

use PayPal\PayPalApi;

class PayPalPaymentProcessor implements PaymentProcessor
{
    /**
     * @var PayPalApi
     */
    protected $payPalApi;

    /**
     * Constructor.
     *
     * @param PayPalApi $payPalApi
     */
    public function __construct(PayPalApi $payPalApi)
    {
        $this->payPalApi = $payPalApi;
    }

    /**
     * The client wants to pay something.
     *
     * @return void
     */
    public function pay()
    {
        $this->payPalApi->chargeCustomer();
    }
}