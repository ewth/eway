<?php

namespace Ewan\Eway\Interfaces;


interface RefundInterface
{

    /**
     * @return string
     */
    public function getTransactionId();

    /**
     * @param string $transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId);

    /**
     * @return EwayCustomer
     */
    public function getCustomer();

    /**
     * @param EwayCustomer $customer
     *
     * @return $this
     */
    public function setCustomer($customer);

    /**
     * @return EwayShippingAddress
     */
    public function getShippingAddress();

    /**
     * @param EwayShippingAddress $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress($shippingAddress);

    /**
     * @return EwayRefundDetails
     */
    public function getRefund();

    /**
     * @param EwayRefundDetails $refund
     *
     * @return $this
     */
    public function setRefund($refund);

    /**
     * @return array
     */
    public function getOptions();

    /**
     * @param array $options
     *
     * @return $this
     */
    public function setOptions($options);

    /**
     * @return string
     */
    public function getDeviceId();

    /**
     * @param string $deviceId
     *
     * @return $this
     */
    public function setDeviceId($deviceId);

    /**
     * @return string
     */
    public function getPartnerId();

    /**
     * @param string $partnerId
     *
     * @return $this
     */
    public function setPartnerId($partnerId);

}
