<?php

namespace Ewan\Eway\Interfaces;


interface TransactionInterface
{

    /**
     * @return string
     */
    public function getTransactionType();

    /**
     * @param string $transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType);

    /**
     * @return bool
     */
    public function getCapture();

    /**
     * @param bool $capture
     *
     * @return $this
     */
    public function setCapture($capture);

    /**
     * @return bool
     */
    public function getSaveCustomer();

    /**
     * @param bool $saveCustomer
     *
     * @return $this
     */
    public function setSaveCustomer($saveCustomer);

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
     * @return EwayPayment
     */
    public function getPayment();

    /**
     * @param EwayPayment $payment
     *
     * @return $this
     */
    public function setPayment($payment);

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

    /**
     * @return string
     */
    public function getThirdPartyWalletId();

    /**
     * @param string $thirdPartyWalletId
     *
     * @return $this
     */
    public function setThirdPartyWalletId($thirdPartyWalletId);

    /**
     * @return string
     */
    public function getSecuredCardData();

    /**
     * @param string $securedCardData
     *
     * @return $this
     */
    public function setSecuredCardData($securedCardData);

    /**
     * @return int
     */
    public function getAuthTransactionId();

    /**
     * @param int $authTransactionId
     *
     * @return $this
     */
    public function setAuthTransactionId($authTransactionId);

    /**
     * @return string
     */
    public function getRedirectUrl();

    /**
     * @param string $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl);

    /**
     * @return string
     */
    public function getCancelUrl();

    /**
     * @param string $cancelUrl
     *
     * @return $this
     */
    public function setCancelUrl($cancelUrl);

    /**
     * @return bool
     */
    public function getCheckoutPayment();

    /**
     * @param bool $checkoutPayment
     *
     * @return $this
     */
    public function setCheckoutPayment($checkoutPayment);

    /**
     * @return string
     */
    public function getCheckoutUrl();

    /**
     * @param string $checkoutUrl
     *
     * @return $this
     */
    public function setCheckoutUrl($checkoutUrl);

    /**
     * @return string
     */
    public function getMethod();

    /**
     * @param string $method
     *
     * @return $this
     */
    public function setMethod($method);

    /**
     * @return string
     */
    public function getInvoiceNumber();

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber);

    /**
     * @return string
     */
    public function getInvoiceDescription();

    /**
     * @param string $invoiceDescription
     *
     * @return $this
     */
    public function setInvoiceDescription($invoiceDescription);

    /**
     * @return string
     */
    public function getTokenCustomerId();

    /**
     * @param string $tokenCustomerId
     *
     * @return $this
     */
    public function setTokenCustomerId($tokenCustomerId);

    /**
     * @return string
     */
    public function getTransactionDateTime();

    /**
     * @param string $transactionDateTime
     *
     * @return $this
     */
    public function setTransactionDateTime($transactionDateTime);

    /**
     * @return boolean
     */
    public function getTransactionCaptured();

    /**
     * @param boolean $transactionCaptured
     *
     * @return $this
     */
    public function setTransactionCaptured($transactionCaptured);

    /**
     * @return int
     */
    public function getSource();

    /**
     * @param int $source
     *
     * @return $this
     */
    public function setSource($source);

    /**
     * @return int
     */
    public function getMaxRefund();

    /**
     * @param int $maxRefund
     *
     * @return $this
     */
    public function setMaxRefund($maxRefund);

    /**
     * @return int
     */
    public function getOriginalTransactionId();

    /**
     * @param int $originalTransactionId
     *
     * @return $this
     */
    public function setOriginalTransactionId($originalTransactionId);

    /**
     * @return string
     */
    public function getFraudAction();

    /**
     * @param string $fraudAction
     *
     * @return $this
     */
    public function setFraudAction($fraudAction);

    /**
     * @return string
     */
    public function getCurrencyCode();

    /**
     * @param string $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode);

}
