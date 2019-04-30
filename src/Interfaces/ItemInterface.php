<?php

namespace Ewan\Eway\Interfaces;


interface ItemInterface
{

    /**
     * @return string
     */
    public function getSku();

    /**
     * @param string $sku
     *
     * @return $this
     */
    public function setSku($sku);

    /**
     * @return string
     */
    public function getDescription();

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description);

    /**
     * @return int
     */
    public function getQuantity();

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity);

    /**
     * @return int
     */
    public function getUnitCost();

    /**
     * @param int $unitCost
     *
     * @return $this
     */
    public function setUnitCost($unitCost);

    /**
     * @return int
     */
    public function getUnitTax();

    /**
     * @param int $unitTax
     *
     * @return $this
     */
    public function setUnitTax($unitTax);

    /**
     * @return int
     */
    public function getTax();

    /**
     * @param int $tax
     *
     * @return $this
     */
    public function setTax($tax);

    /**
     * @return int
     */
    public function getTotal();

    /**
     * @param int $total
     *
     * @return $this
     */
    public function setTotal($total);

}
