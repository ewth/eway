<?php

namespace Ewan\Eway\Interfaces;

interface ErrorInterface
{

    /**
     * @param string $errorCode
     *
     * @return string
     */
    public static function getErrorDescription($errorCode);

    /**
     * @param string $errorCode
     *
     * @return int
     */
    public static function getStandardError($errorCode);

}