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

    /**
     * @return array
     */
    public function toArray()
    {
        $result = [];
        foreach (get_object_vars($this) as $key => $value) {
            if (is_object($this->{$key})) {
                if ($this->{$key} instanceof $this && method_exists($this->{$key}, 'toArray')) {
                    $value = $this->{$key}->toArray();
                }
            }
            $result[$key] = $value;
        }

        return $result;
    }
}