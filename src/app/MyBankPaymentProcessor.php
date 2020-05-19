<?php

namespace App;

use MyBank\MyBankApi;

class MyBankPaymentProcessor implements PaymentProcessor
{
    /**
     * @var MyBankApi
     */
    protected $myBankApi;

    /**
     * Constructor.
     *
     * @param MyBankApi $myBankApi
     */
    public function __construct(MyBankApi $myBankApi)
    {
        $this->myBankApi = $myBankApi;
    }

    /**
     * The client wants to pay something.
     *
     * @return void
     */
    public function pay()
    {
        $this->myBankApi->charge();
    }
}