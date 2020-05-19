<?php
namespace App;

/**
 * Store.
 *
 * This is a fake store class to explain the
 * dependency inversion principle.
 *
 * @package App
 */
class Store
{
    /**
     * @var PaymentProcessor
     */
    protected $paymentProcessor;

    /**
     * Constructor.
     *
     * @param PaymentProcessor $paymentProcessor
     */
    public function __construct(PaymentProcessor $paymentProcessor)
    {
        $this->paymentProcessor = $paymentProcessor;
    }

    /**
     * Purchase an item.
     */
    public function purchase()
    {
        $this->paymentProcessor->pay();
    }
}