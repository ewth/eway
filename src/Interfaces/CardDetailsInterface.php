<?php

namespace Ewan\Eway\Interfaces;


interface CardDetailsInterface
{

    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * @return string
     */
    public function getNumber();

    /**
     * @param string $number
     *
     * @return $this
     */
    public function setNumber($number);

    /**
     * @return string
     */
    public function getExpiryMonth();

    /**
     * @param string $expiryMonth
     *
     * @return $this
     */
    public function setExpiryMonth($expiryMonth);

    /**
     * @return string
     */
    public function getExpiryYear();

    /**
     * @param string $expiryYear
     *
     * @return $this
     */
    public function setExpiryYear($expiryYear);

    /**
     * @return string
     */
    public function getStartMonth();

    /**
     * @param string $startMonth
     *
     * @return $this
     */
    public function setStartMonth($startMonth);

    /**
     * @return string
     */
    public function getStartYear();

    /**
     * @param string $startYear
     *
     * @return $this
     */
    public function setStartYear($startYear);

    /**
     * @return string
     */
    public function getIssueNumber();

    /**
     * @param string $issueNumber
     *
     * @return $this
     */
    public function setIssueNumber($issueNumber);

    /**
     * @return string
     */
    public function getCvn();

    /**
     * @param string $cvn
     *
     * @return $this
     */
    public function setCvn($cvn);

}
