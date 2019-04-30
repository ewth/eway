<?php

namespace Ewan\Eway\Interfaces;


interface ProcessingDetailsInterface
{

    /**
     * @return string
     */
    public function getAuthorisationCode();

    /**
     * @param string $authorisationCode
     *
     * @return $this
     */
    public function setAuthorisationCode($authorisationCode);

    /**
     * @return string
     */
    public function getResponseCode();

    /**
     * @param string $responseCode
     *
     * @return $this
     */
    public function setResponseCode($responseCode);

    /**
     * @return string
     */
    public function getResponseMessage();

    /**
     * @param string $responseMessage
     *
     * @return $this
     */
    public function setResponseMessage($responseMessage);

}
