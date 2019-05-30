<?php

namespace Yannoff\Component\Collections\Implementation;

/**
 * Trait CountableTrait
 * Implement the methods required by the Countable interface.
 * @see https://www.php.net/manual/en/class.countable.php
 *
 * @package Yannoff\Component\Collections\Implementation
 */
trait CountableTrait
{
    use BaseArrayTrait;

    /**
     * Return elements count in the collection
     *
     * @return int The custom count as an integer.
     */
    public function count()
    {
        return count($this->elements);
    }
}
