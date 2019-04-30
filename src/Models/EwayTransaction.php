<?php

namespace Ewan\Eway\Models;


use Ewan\Eway\Interfaces\TransactionInterface;

class EwayTransaction extends AbstractModel implements TransactionInterface
{

    /** @var string $transactionType */
    protected $transactionType;

    /** @var bool $capture */
    protected $capture;

    /** @var bool $saveCustomer */
    protected $saveCustomer;

    /** @var EwayCustomer $customer */
    protected $customer;

    /** @var EwayShippingAddress $shippingAddress */
    protected $shippingAddress;

    /** @var EwayPayment $payment */
    protected $payment;

    /** @var array $options */
    protected $options;

    /** @var string $deviceId */
    protected $deviceId;

    /** @var string $partnerId */
    protected $partnerId;

    /** @var string $thirdPartyWalletId */
    protected $thirdPartyWalletId;

    /** @var string $securedCardData */
    protected $securedCardData;

    /** @var int $authTransactionId */
    protected $authTransactionId;

    /** @var string $redirectUrl */
    protected $redirectUrl;

    /** @var string $cancelUrl */
    protected $cancelUrl;

    /** @var bool $checkoutPayment */
    protected $checkoutPayment;

    /** @var string $checkoutUrl */
    protected $checkoutUrl;

    /** @var string $method */
    protected $method;

    /** @var string $invoiceNumber */
    protected $invoiceNumber;

    /** @var string $invoiceDescription */
    protected $invoiceDescription;

    /** @var string $tokenCustomerId */
    protected $tokenCustomerId;

    /** @var string $transactionDateTime */
    protected $transactionDateTime;

    /** @var boolean $transactionCaptured */
    protected $transactionCaptured;

    /** @var int $source */
    protected $source;

    /** @var int $maxRefund */
    protected $maxRefund;

    /** @var int $originalTransactionId */
    protected $originalTransactionId;

    /** @var string $fraudAction */
    protected $fraudAction;

    /** @var string $currencyCode */
    protected $currencyCode;

    /**
     * @return int
     */
    public function getAuthTransactionId()
    {
        return $this->authTransactionId;
    }

    /**
     * @param int $authTransactionId
     *
     * @return $this
     */
    public function setAuthTransactionId($authTransactionId)
    {
        $this->authTransactionId = $authTransactionId;

        return $this;
    }

    /**
     * @return string
     */
    public function getCancelUrl()
    {
        return $this->cancelUrl;
    }

    /**
     * @param string $cancelUrl
     *
     * @return $this
     */
    public function setCancelUrl($cancelUrl)
    {
        $this->cancelUrl = $cancelUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCapture()
    {
        return $this->capture;
    }

    /**
     * @param bool $capture
     *
     * @return $this
     */
    public function setCapture($capture)
    {
        $this->capture = $capture;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCheckoutPayment()
    {
        return $this->checkoutPayment;
    }

    /**
     * @param bool $checkoutPayment
     *
     * @return $this
     */
    public function setCheckoutPayment($checkoutPayment)
    {
        $this->checkoutPayment = $checkoutPayment;

        return $this;
    }

    /**
     * @return string
     */
    public function getCheckoutUrl()
    {
        return $this->checkoutUrl;
    }

    /**
     * @param string $checkoutUrl
     *
     * @return $this
     */
    public function setCheckoutUrl($checkoutUrl)
    {
        $this->checkoutUrl = $checkoutUrl;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     *
     * @return $this
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

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
     * @return string
     */
    public function getFraudAction()
    {
        return $this->fraudAction;
    }

    /**
     * @param string $fraudAction
     *
     * @return $this
     */
    public function setFraudAction($fraudAction)
    {
        $this->fraudAction = $fraudAction;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceDescription()
    {
        return $this->invoiceDescription;
    }

    /**
     * @param string $invoiceDescription
     *
     * @return $this
     */
    public function setInvoiceDescription($invoiceDescription)
    {
        $this->invoiceDescription = $invoiceDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRefund()
    {
        return $this->maxRefund;
    }

    /**
     * @param int $maxRefund
     *
     * @return $this
     */
    public function setMaxRefund($maxRefund)
    {
        $this->maxRefund = $maxRefund;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param string $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;

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
     * @return int
     */
    public function getOriginalTransactionId()
    {
        return $this->originalTransactionId;
    }

    /**
     * @param int $originalTransactionId
     *
     * @return $this
     */
    public function setOriginalTransactionId($originalTransactionId)
    {
        $this->originalTransactionId = $originalTransactionId;

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
     * @return EwayPayment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param EwayPayment $payment
     *
     * @return $this
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * @param string $redirectUrl
     *
     * @return $this
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSaveCustomer()
    {
        return $this->saveCustomer;
    }

    /**
     * @param bool $saveCustomer
     *
     * @return $this
     */
    public function setSaveCustomer($saveCustomer)
    {
        $this->saveCustomer = $saveCustomer;

        return $this;
    }

    /**
     * @return string
     */
    public function getSecuredCardData()
    {
        return $this->securedCardData;
    }

    /**
     * @param string $securedCardData
     *
     * @return $this
     */
    public function setSecuredCardData($securedCardData)
    {
        $this->securedCardData = $securedCardData;

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
     * @return int
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param int $source
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getThirdPartyWalletId()
    {
        return $this->thirdPartyWalletId;
    }

    /**
     * @param string $thirdPartyWalletId
     *
     * @return $this
     */
    public function setThirdPartyWalletId($thirdPartyWalletId)
    {
        $this->thirdPartyWalletId = $thirdPartyWalletId;

        return $this;
    }

    /**
     * @return string
     */
    public function getTokenCustomerId()
    {
        return $this->tokenCustomerId;
    }

    /**
     * @param string $tokenCustomerId
     *
     * @return $this
     */
    public function setTokenCustomerId($tokenCustomerId)
    {
        $this->tokenCustomerId = $tokenCustomerId;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getTransactionCaptured()
    {
        return $this->transactionCaptured;
    }

    /**
     * @param boolean $transactionCaptured
     *
     * @return $this
     */
    public function setTransactionCaptured($transactionCaptured)
    {
        $this->transactionCaptured = $transactionCaptured;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionDateTime()
    {
        return $this->transactionDateTime;
    }

    /**
     * @param string $transactionDateTime
     *
     * @return $this
     */
    public function setTransactionDateTime($transactionDateTime)
    {
        $this->transactionDateTime = $transactionDateTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * @param string $transactionType
     *
     * @return $this
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;

        return $this;
    }

}
