<?php

namespace Ewan\Eway\Interfaces;


interface AddressInterface
{

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
    public function getPostalCode();

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode);

}
