<?php

namespace Ewan\Eway\Models;

use Ewan\Eway\Interfaces\ItemInterface;

class EwayItem extends AbstractModel implements ItemInterface
{

    /** @var string $sku */
    protected $sku;

    /** @var string $description */
    protected $description;

    /** @var int $quantity */
    protected $quantity;

    /** @var int $unitCost */
    protected $unitCost;

    /** @var int $unitTax */
    protected $unitTax;

    /** @var int $tax */
    protected $tax;

    /** @var int $total */
    protected $total;

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param string $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @return int
     */
    public function getTax()
    {
        return $this->tax;
    }

    /**
     * @param int $tax
     *
     * @return $this
     */
    public function setTax($tax)
    {
        $this->tax = $tax;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param int $total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    /**
     * @param int $unitCost
     *
     * @return $this
     */
    public function setUnitCost($unitCost)
    {
        $this->unitCost = $unitCost;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnitTax()
    {
        return $this->unitTax;
    }

    /**
     * @param int $unitTax
     *
     * @return $this
     */
    public function setUnitTax($unitTax)
    {
        $this->unitTax = $unitTax;

        return $this;
    }

}
