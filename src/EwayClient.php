<?php

namespace Ewan\Eway;

use Eway\Rapid\Client;
use Eway\Rapid\Enum\ApiMethod;
use Eway\Rapid\Model\Customer;
use Eway\Rapid\Model\Payment;
use Eway\Rapid\Model\SettlementSearch;
use Eway\Rapid\Model\Transaction;

class EwayClient
{

    protected $client;
    protected $ewayEnvironment;

    public function __construct(
        $ewayApiKey,
        $ewayApiPassword,
        $ewayClientKey,
        $ewayEnvironment = 'sandbox'
    ) {
        $this->ewayEnvironment = $ewayEnvironment;
        $this->client          = new Client($ewayApiKey, $ewayApiPassword, $ewayEnvironment);

    }

    /**
     * @param $attributes
     *
     * @return array
     */
    public function createCustomer($attributes)
    {
        $customer = new Customer($attributes);
        $request  = [
            'Customer' => $customer
        ];
        $result   = $this->client->createCustomer(ApiMethod::DIRECT, $customer);

        return $result->attributesToArray();
    }

    /**
     * @param string $ewayTokenCustomerID
     * @param float  $purchaseAmount
     *
     * @return array
     */
    public function makePurchase(string $ewayTokenCustomerID, float $purchaseAmount) : array
    {
        $transaction = new Transaction();
        $payment     = new Payment();

        $customer = $this->getCustomer($ewayTokenCustomerID);

        $purchaseAmount = number_format($purchaseAmount, 2);
        echo $purchaseAmount;

        $payment->setAttribute('TotalAmount', $purchaseAmount * 100);
        $transaction->setPaymentAttribute($payment->toArray())
                    ->setTransactionTypeAttribute('Recurring')
                    ->setCustomerAttribute($customer);

        $result = $this->client->createTransaction(ApiMethod::DIRECT, $transaction->toArray());

        return $result->toArray();

    }

    /**
     * @param string $ewayTokenCustomerID
     *
     * @return array
     */
    public function getCustomer(string $ewayTokenCustomerID) : array
    {
        $customer = $this->client->queryCustomer($ewayTokenCustomerID);

        if (!$customer->getErrors()) {
            $customers = $customer->getAttribute('Customers');
            /** @var \Eway\Rapid\Model\Customer $customer */
            $customer = array_pop($customers);

            return $customer->attributesToArray();
        }

        return null;
    }

    /**
     * @param string $ewayTokenCustomerID
     *
     * @return array
     */
    public function getTransactions(string $ewayTokenCustomerID) : array
    {

        $result = $this->client->queryCustomer($ewayTokenCustomerID);
        $result = $this->client->queryTransaction($ewayTokenCustomerID);
        $result = $this->client->settlementSearch();

        print_R($result);

        return [];
    }

    private function modelToArray($model)
    {
    }

}