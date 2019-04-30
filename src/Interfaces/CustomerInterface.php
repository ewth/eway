<?php

namespace Ewan\Eway\Interfaces;


interface CustomerInterface
{

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
    public function getReference();

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference);

    /**
     * @return string
     */
    public function getTitle();

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title);

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
    public function getCompanyName();

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName);

    /**
     * @return string
     */
    public function getJobDescription();

    /**
     * @param string $jobDescription
     *
     * @return $this
     */
    public function setJobDescription($jobDescription);

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
    public function getUrl();

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url);

    /**
     * @return string
     */
    public function getComments();

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments);

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
     * @return string
     */
    public function getCustomView();

    /**
     * @param string $customView
     *
     * @return $this
     */
    public function setCustomView($customView);

    /**
     * @return string
     */
    public function getLogoUrl();

    /**
     * @param string $logoUrl
     *
     * @return $this
     */
    public function setLogoUrl($logoUrl);

    /**
     * @return string
     */
    public function getHeaderText();

    /**
     * @param string $headerText
     *
     * @return $this
     */
    public function setHeaderText($headerText);

    /**
     * @return string
     */
    public function getLanguage();

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language);

    /**
     * @return string
     */
    public function getCustomerReadOnly();

    /**
     * @param string $customerReadOnly
     *
     * @return $this
     */
    public function setCustomerReadOnly($customerReadOnly);

    /**
     * @return boolean
     */
    public function getVerifyCustomerPhone();

    /**
     * @param boolean $verifyCustomerPhone
     *
     * @return $this
     */
    public function setVerifyCustomerPhone($verifyCustomerPhone);

    /**
     * @return boolean
     */
    public function getVerifyCustomerEmail();

    /**
     * @param boolean $verifyCustomerEmail
     *
     * @return $this
     */
    public function setVerifyCustomerEmail($verifyCustomerEmail);

    /**
     * @return EwayCardDetails
     */
    public function getCardDetails();

    /**
     * @param EwayCardDetails $cardDetails
     *
     * @return $this
     */
    public function setCardDetails($cardDetails);

    /**
     * @return string
     */
    public function getCardName();

    /**
     * @param string $cardName
     *
     * @return $this
     */
    public function setCardName($cardName);

    /**
     * @return string
     */
    public function getCardNumber();

    /**
     * @param string $cardNumber
     *
     * @return $this
     */
    public function setCardNumber($cardNumber);

    /**
     * @return string
     */
    public function getCardStartMonth();

    /**
     * @param string $cardStartMonth
     *
     * @return $this
     */
    public function setCardStartMonth($cardStartMonth);

    /**
     * @return string
     */
    public function getCardStartYear();

    /**
     * @param string $cardStartYear
     *
     * @return $this
     */
    public function setCardStartYear($cardStartYear);

    /**
     * @return string
     */
    public function getCardExpiryMonth();

    /**
     * @param string $cardExpiryMonth
     *
     * @return $this
     */
    public function setCardExpiryMonth($cardExpiryMonth);

    /**
     * @return string
     */
    public function getCardExpiryYear();

    /**
     * @param string $cardExpiryYear
     *
     * @return $this
     */
    public function setCardExpiryYear($cardExpiryYear);

    /**
     * @return string
     */
    public function getCardIssueNumber();

    /**
     * @param string $cardIssueNumber
     *
     * @return $this
     */
    public function setCardIssueNumber($cardIssueNumber);

}
