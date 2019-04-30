<?php

namespace Ewan\Eway\Models;


use Ewan\Eway\Interfaces\VerificationInterface;

class EwayVerification extends AbstractModel implements VerificationInterface
{

    /** @var string $cvn */
    protected $cvn;

    /** @var string $address */
    protected $address;

    /** @var string $email */
    protected $email;

    /** @var string $mobile */
    protected $mobile;

    /** @var string $phone */
    protected $phone;

    /** @var string $beagleEmail */
    protected $beagleEmail;

    /** @var string $beaglePhone */
    protected $beaglePhone;

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param string $address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @return string
     */
    public function getBeagleEmail()
    {
        return $this->beagleEmail;
    }

    /**
     * @param string $beagleEmail
     *
     * @return $this
     */
    public function setBeagleEmail($beagleEmail)
    {
        $this->beagleEmail = $beagleEmail;

        return $this;
    }

    /**
     * @return string
     */
    public function getBeaglePhone()
    {
        return $this->beaglePhone;
    }

    /**
     * @param string $beaglePhone
     *
     * @return $this
     */
    public function setBeaglePhone($beaglePhone)
    {
        $this->beaglePhone = $beaglePhone;

        return $this;
    }

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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param string $mobile
     *
     * @return $this
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

}
