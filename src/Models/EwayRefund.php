<?php

namespace Ewan\Eway\Models;

use Ewan\Eway\Interfaces\RefundInterface;

class EwayRefund extends AbstractModel implements RefundInterface
{

    /** @var string $transactionId */
    protected $transactionId;

    /** @var EwayCustomer $customer */
    protected $customer;

    /** @var EwayShippingAddress $shippingAddress */
    protected $shippingAddress;

    /** @var EwayRefundDetails $refund */
    protected $refund;

    /** @var array $options */
    protected $options;

    /** @var string $deviceId */
    protected $deviceId;

    /** @var string $partnerId */
    protected $partnerId;

    /**
     * @return EwayCustomer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param EwayCustomer $customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;

        return $this;
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param array $options
     *
     * @return $this
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * @return string
     */
    public function getPartnerId()
    {
        return $this->partnerId;
    }

    /**
     * @param string $partnerId
     *
     * @return $this
     */
    public function setPartnerId($partnerId)
    {
        $this->partnerId = $partnerId;

        return $this;
    }

    /**
     * @return EwayRefundDetails
     */
    public function getRefund()
    {
        return $this->refund;
    }

    /**
     * @param EwayRefundDetails $refund
     *
     * @return $this
     */
    public function setRefund($refund)
    {
        $this->refund = $refund;

        return $this;
    }

    /**
     * @return EwayShippingAddress
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param EwayShippingAddress $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @param string $transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->transactionId = $transactionId;

        return $this;
    }

}
