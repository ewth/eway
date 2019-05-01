<?php

namespace Ewan\Eway\Models;

abstract class AbstractModel
{

    /**
     * AbstractModel constructor.
     *
     * @param mixed $attributes
     */
    public function __construct($attributes = [])
    {
        if ($attributes) {
            foreach ($attributes as $key => $value) {
                $method = 'set' . $key;
                if (method_exists($this, $method)) {
                    $this->{$method}($value);
                }
            }
        }
    }
}