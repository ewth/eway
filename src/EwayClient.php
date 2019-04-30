<?php

namespace Ewan\Eway;

use Eway\Rapid\Client;

class Eway
{

    protected $client;

    public function __construct(
        $ewayApiKey,
        $ewayApiPassword,
        $ewayClientKey,
        $ewayEnvironment = 'sandbox'
    ) {
        $this->client = new Client($ewayApiKey, $ewayApiPassword, $ewayEnvironment);

    }

    public function createCustomer()
    {

    }

    public function transactions($customerId)
    {

    }

}