<?php

namespace Ewan\Eway\Interfaces;


interface PaymentInterface
{

    /**
     * @return int
     */
    public function getTotalAmount();

    /**
     * @param int $totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount);

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
    public function getInvoiceReference();

    /**
     * @param string $invoiceReference
     *
     * @return $this
     */
    public function setInvoiceReference($invoiceReference);

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
