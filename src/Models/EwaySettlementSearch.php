<?php

namespace Ewan\Eway\Models;


use Ewan\Eway\Interfaces\SettlementSearchInterface;

class EwaySettlementSearch extends AbstractModel implements SettlementSearchInterface
{

    /** @var string $reportMode */
    protected $reportMode;

    /** @var string $settlementDate */
    protected $settlementDate;

    /** @var string $startDate */
    protected $startDate;

    /** @var string $endDate */
    protected $endDate;

    /** @var string $cardType */
    protected $cardType;

    /** @var string $currency */
    protected $currency;

    /** @var int $page */
    protected $page;

    /** @var int $pageSize */
    protected $pageSize;

    /**
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * @param string $cardType
     *
     * @return $this
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param int $page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;

        return $this;
    }

    /**
     * @return string
     */
    public function getReportMode()
    {
        return $this->reportMode;
    }

    /**
     * @param string $reportMode
     *
     * @return $this
     */
    public function setReportMode($reportMode)
    {
        $this->reportMode = $reportMode;

        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementDate()
    {
        return $this->settlementDate;
    }

    /**
     * @param string $settlementDate
     *
     * @return $this
     */
    public function setSettlementDate($settlementDate)
    {
        $this->settlementDate = $settlementDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

}
