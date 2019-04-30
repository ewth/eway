<?php

namespace Ewan\Eway\Interfaces;

interface SettlementSearchInterface
{

    /**
     * @return string
     */
    public function getReportMode();

    /**
     * @param string $reportMode
     *
     * @return $this
     */
    public function setReportMode($reportMode);

    /**
     * @return string
     */
    public function getSettlementDate();

    /**
     * @param string $settlementDate
     *
     * @return $this
     */
    public function setSettlementDate($settlementDate);

    /**
     * @return string
     */
    public function getStartDate();

    /**
     * @param string $startDate
     *
     * @return $this
     */
    public function setStartDate($startDate);

    /**
     * @return string
     */
    public function getEndDate();

    /**
     * @param string $endDate
     *
     * @return $this
     */
    public function setEndDate($endDate);

    /**
     * @return string
     */
    public function getCardType();

    /**
     * @param string $cardType
     *
     * @return $this
     */
    public function setCardType($cardType);

    /**
     * @return string
     */
    public function getCurrency();

    /**
     * @param string $currency
     *
     * @return $this
     */
    public function setCurrency($currency);

    /**
     * @return int
     */
    public function getPage();

    /**
     * @param int $page
     *
     * @return $this
     */
    public function setPage($page);

    /**
     * @return int
     */
    public function getPageSize();

    /**
     * @param int $pageSize
     *
     * @return $this
     */
    public function setPageSize($pageSize);

}
