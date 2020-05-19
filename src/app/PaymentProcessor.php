<?php

namespace App;

interface PaymentProcessor
{
    /**
     * The client wants to pay something.
     *
     * @return void
     */
    public function pay();
}