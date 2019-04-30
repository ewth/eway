<?php

namespace Ewan\Eway\Models;


use Ewan\Eway\Interfaces\CustomerInterface;

class EwayCustomer extends AbstractModel implements CustomerInterface
{

    /** @var string $tokenCustomerId */
    protected $tokenCustomerId;

    /** @var string $reference */
    protected $reference;

    /** @var string $title */
    protected $title;

    /** @var string $firstName */
    protected $firstName;

    /** @var string $lastName */
    protected $lastName;

    /** @var string $companyName */
    protected $companyName;

    /** @var string $jobDescription */
    protected $jobDescription;

    /** @var string $street1 */
    protected $street1;

    /** @var string $street2 */
    protected $street2;

    /** @var string $city */
    protected $city;

    /** @var string $state */
    protected $state;

    /** @var string $country */
    protected $country;

    /** @var string $postalCode */
    protected $postalCode;

    /** @var string $phone */
    protected $phone;

    /** @var string $mobile */
    protected $mobile;

    /** @var string $fax */
    protected $fax;

    /** @var string $url */
    protected $url;

    /** @var string $comments */
    protected $comments;

    /** @var string $redirectUrl */
    protected $redirectUrl;

    /** @var string $cancelUrl */
    protected $cancelUrl;

    /** @var string $securedCardData */
    protected $securedCardData;

    /** @var string $customView */
    protected $customView;

    /** @var string $logoUrl */
    protected $logoUrl;

    /** @var string $headerText */
    protected $headerText;

    /** @var string $language */
    protected $language;

    /** @var string $customerReadOnly */
    protected $customerReadOnly;

    /** @var boolean $verifyCustomerPhone */
    protected $verifyCustomerPhone;

    /** @var boolean $verifyCustomerEmail */
    protected $verifyCustomerEmail;

    /** @var EwayCardDetails $cardDetails */
    protected $cardDetails;

    /** @var string $cardName */
    protected $cardName;

    /** @var string $cardNumber */
    protected $cardNumber;

    /** @var string $cardStartMonth */
    protected $cardStartMonth;

    /** @var string $cardStartYear */
    protected $cardStartYear;

    /** @var string $cardExpiryMonth */
    protected $cardExpiryMonth;

    /** @var string $cardExpiryYear */
    protected $cardExpiryYear;

    /** @var string $cardIssueNumber */
    protected $cardIssueNumber;

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
     * @return EwayCardDetails
     */
    public function getCardDetails()
    {
        return $this->cardDetails;
    }

    /**
     * @param EwayCardDetails $cardDetails
     *
     * @return $this
     */
    public function setCardDetails($cardDetails)
    {
        $this->cardDetails = $cardDetails;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardExpiryMonth()
    {
        return $this->cardExpiryMonth;
    }

    /**
     * @param string $cardExpiryMonth
     *
     * @return $this
     */
    public function setCardExpiryMonth($cardExpiryMonth)
    {
        $this->cardExpiryMonth = $cardExpiryMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardExpiryYear()
    {
        return $this->cardExpiryYear;
    }

    /**
     * @param string $cardExpiryYear
     *
     * @return $this
     */
    public function setCardExpiryYear($cardExpiryYear)
    {
        $this->cardExpiryYear = $cardExpiryYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardIssueNumber()
    {
        return $this->cardIssueNumber;
    }

    /**
     * @param string $cardIssueNumber
     *
     * @return $this
     */
    public function setCardIssueNumber($cardIssueNumber)
    {
        $this->cardIssueNumber = $cardIssueNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardName()
    {
        return $this->cardName;
    }

    /**
     * @param string $cardName
     *
     * @return $this
     */
    public function setCardName($cardName)
    {
        $this->cardName = $cardName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     *
     * @return $this
     */
    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardStartMonth()
    {
        return $this->cardStartMonth;
    }

    /**
     * @param string $cardStartMonth
     *
     * @return $this
     */
    public function setCardStartMonth($cardStartMonth)
    {
        $this->cardStartMonth = $cardStartMonth;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardStartYear()
    {
        return $this->cardStartYear;
    }

    /**
     * @param string $cardStartYear
     *
     * @return $this
     */
    public function setCardStartYear($cardStartYear)
    {
        $this->cardStartYear = $cardStartYear;

        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param string $companyName
     *
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomView()
    {
        return $this->customView;
    }

    /**
     * @param string $customView
     *
     * @return $this
     */
    public function setCustomView($customView)
    {
        $this->customView = $customView;

        return $this;
    }

    /**
     * @return string
     */
    public function getCustomerReadOnly()
    {
        return $this->customerReadOnly;
    }

    /**
     * @param string $customerReadOnly
     *
     * @return $this
     */
    public function setCustomerReadOnly($customerReadOnly)
    {
        $this->customerReadOnly = $customerReadOnly;

        return $this;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     *
     * @return $this
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getHeaderText()
    {
        return $this->headerText;
    }

    /**
     * @param string $headerText
     *
     * @return $this
     */
    public function setHeaderText($headerText)
    {
        $this->headerText = $headerText;

        return $this;
    }

    /**
     * @return string
     */
    public function getJobDescription()
    {
        return $this->jobDescription;
    }

    /**
     * @param string $jobDescription
     *
     * @return $this
     */
    public function setJobDescription($jobDescription)
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return string
     */
    public function getLogoUrl()
    {
        return $this->logoUrl;
    }

    /**
     * @param string $logoUrl
     *
     * @return $this
     */
    public function setLogoUrl($logoUrl)
    {
        $this->logoUrl = $logoUrl;

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

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

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
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

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
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param string $street1
     *
     * @return $this
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;

        return $this;
    }

    /**
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * @param string $street2
     *
     * @return $this
     */
    public function setStreet2($street2)
    {
        $this->street2 = $street2;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

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
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getVerifyCustomerEmail()
    {
        return $this->verifyCustomerEmail;
    }

    /**
     * @param boolean $verifyCustomerEmail
     *
     * @return $this
     */
    public function setVerifyCustomerEmail($verifyCustomerEmail)
    {
        $this->verifyCustomerEmail = $verifyCustomerEmail;

        return $this;
    }

    /**
     * @return boolean
     */
    public function getVerifyCustomerPhone()
    {
        return $this->verifyCustomerPhone;
    }

    /**
     * @param boolean $verifyCustomerPhone
     *
     * @return $this
     */
    public function setVerifyCustomerPhone($verifyCustomerPhone)
    {
        $this->verifyCustomerPhone = $verifyCustomerPhone;

        return $this;
    }

}
