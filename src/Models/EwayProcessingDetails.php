<?php

namespace Ewan\Eway\Models;


use Ewan\Eway\Interfaces\ProcessingDetailsInterface;

class EwayProcessingDetails extends AbstractModel implements ProcessingDetailsInterface
{

    /** @var string $authorisationCode */
    protected $authorisationCode;

    /** @var string $responseCode */
    protected $responseCode;

    /** @var string $responseMessage */
    protected $responseMessage;

    /**
     * @return string
     */
    public function getAuthorisationCode()
    {
        return $this->authorisationCode;
    }

    /**
     * @param string $authorisationCode
     *
     * @return $this
     */
    public function setAuthorisationCode($authorisationCode)
    {
        $this->authorisationCode = $authorisationCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseCode()
    {
        return $this->responseCode;
    }

    /**
     * @param string $responseCode
     *
     * @return $this
     */
    public function setResponseCode($responseCode)
    {
        $this->responseCode = $responseCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }

    /**
     * @param string $responseMessage
     *
     * @return $this
     */
    public function setResponseMessage($responseMessage)
    {
        $this->responseMessage = $responseMessage;

        return $this;
    }

}
