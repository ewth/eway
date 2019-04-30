<?php

namespace Ewan\Eway;

use Ewan\Eway\Models\EwayCustomer;
use Eway\Rapid\Client;
use Eway\Rapid\Enum\ApiMethod;
use Eway\Rapid\Model\Customer;

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
        $this->client = new Client($ewayApiKey, $ewayApiPassword, $ewayEnvironment);

    }

    /**
     * @param $attributes
     */
    public function createCustomer($attributes)
    {
        $customer = new EwayCustomer($attributes);
        $customer = new Customer($attributes);
        $request = [
            'Customer' => $customer
        ];
        $result = $this->client->createCustomer(ApiMethod::DIRECT, $customer);
        print_R($result);
    }

    /**
     * @param string $ewayTokenCustomerID
     *
     * @return \Ewan\Eway\Models\EwayCustomer
     */
    public function readCustomer(string $ewayTokenCustomerID) : EwayCustomer
    {
        $customer = $this->client->queryCustomer($ewayTokenCustomerID);

        if (!$customer->getErrors()) {
            $customers = $customer->getAttribute('Customers');
            /** @var \Eway\Rapid\Model\Customer $customer */
            $customer = array_pop($customers);
            return new EwayCustomer($customer->attributesToArray());
        }

        return null;
    }

    /**
     * @param string $ewayTokenCustomerID
     *
     * @return array
     */
    public function transactions(string $ewayTokenCustomerID) : array
    {

    }

    private function modelToArray($model)
    {
    }

}