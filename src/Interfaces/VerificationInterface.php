<?php

namespace Ewan\Eway\Interfaces;


interface VerificationInterface
{

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

    /**
     * @return string
     */
    public function getAddress();

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address);

    /**
     * @return string
     */
    public function getEmail();

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email);

    /**
     * @return string
     */
    public function getMobile();

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile);

    /**
     * @return string
     */
    public function getPhone();

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone);

    /**
     * @return string
     */
    public function getBeagleEmail();

    /**
     * @param string $beagleEmail
     *
     * @return $this
     */
    public function setBeagleEmail($beagleEmail);

    /**
     * @return string
     */
    public function getBeaglePhone();

    /**
     * @param string $beaglePhone
     *
     * @return $this
     */
    public function setBeaglePhone($beaglePhone);

}
