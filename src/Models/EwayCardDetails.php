<?php

namespace Ewan\Eway\Models;

use Ewan\Eway\Interfaces\CardDetailsInterface;

class EwayCardDetails extends AbstractModel implements CardDetailsInterface
{

    /** @var string $name */
    protected $name;

    /** @var string $number */
    protected $number;

    /** @var string $expiryMonth */
    protected $expiryMonth;

    /** @var string $expiryYear */
    protected $expiryYear;

    /** @var string $startMonth */
    protected $startMonth;

    /** @var string $startYear */
    protected $startYear;

    /** @var string $issueNumber */
    protected $issueNumber;

    /** @var string $cvn */
    protected $cvn;

    /**
     * @return string
     */
    public function getCvn()
    {
        return $this->cvn;
    }

    /**
     * @param string $cvn
     *
     * @return $this
     */
    public function setCvn($cvn)
    {
        $this->cvn = $cvn;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryMonth()
    {
        return $this->expiryMonth;
    }

    /**
     * @param string $expiryMonth
     *
     * @return $this
     */
    public function setExpiryMonth($expiryMonth)
    {
        $this->expiryMonth = $expiryMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiryYear()
    {
        return $this->expiryYear;
    }

    /**
     * @param string $expiryYear
     *
     * @return $this
     */
    public function setExpiryYear($expiryYear)
    {
        $this->expiryYear = $expiryYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getIssueNumber()
    {
        return $this->issueNumber;
    }

    /**
     * @param string $issueNumber
     *
     * @return $this
     */
    public function setIssueNumber($issueNumber)
    {
        $this->issueNumber = $issueNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartMonth()
    {
        return $this->startMonth;
    }

    /**
     * @param string $startMonth
     *
     * @return $this
     */
    public function setStartMonth($startMonth)
    {
        $this->startMonth = $startMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartYear()
    {
        return $this->startYear;
    }

    /**
     * @param string $startYear
     *
     * @return $this
     */
    public function setStartYear($startYear)
    {
        $this->startYear = $startYear;

        return $this;
    }

}
