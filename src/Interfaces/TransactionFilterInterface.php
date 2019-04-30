<?php

namespace Ewan\Eway\Interfaces;


interface TransactionFilterInterface
{

    /**
     * @return int
     */
    public function getTransactionId();

    /**
     * @param int $transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId);

    /**
     * @return string
     */
    public function getAccessCode();

    /**
     * @param string $accessCode
     *
     * @return $this
     */
    public function setAccessCode($accessCode);

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
    public function getInvoiceNumber();

    /**
     * @param string $invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber);

}
