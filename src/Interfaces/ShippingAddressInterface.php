<?php

namespace Ewan\Eway\Interfaces;


interface ShippingAddressInterface
{

    /**
     * @return string
     */
    public function getCity();

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city);

    /**
     * @return string
     */
    public function getCountry();

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country);

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
    public function getFax();

    /**
     * @param string $fax
     *
     * @return $this
     */
    public function setFax($fax);

    /**
     * @return string
     */
    public function getFirstName();

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName);

    /**
     * @return string
     */
    public function getLastName();

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName);

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
    public function getPostalCode();

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode);

    /**
     * @return string
     */
    public function getShippingMethod();

    /**
     * @param string $shippingMethod
     *
     * @return $this
     */
    public function setShippingMethod($shippingMethod);

    /**
     * @return string
     */
    public function getState();

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state);

    /**
     * @return string
     */
    public function getStreet1();

    /**
     * @param string $street1
     *
     * @return $this
     */
    public function setStreet1($street1);

    /**
     * @return string
     */
    public function getStreet2();

    /**
     * @param string $street2
     *
     * @return $this
     */
    public function setStreet2($street2);

}
