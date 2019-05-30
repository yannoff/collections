<?php

namespace Yannoff\Component\Collections\Implementation;

/**
 * Trait IteratorTrait
 * Implement the methods required by the Iterator interface.
 * @see https://www.php.net/manual/en/class.iterator.php
 *
 * @package Yannoff\Component\Collections\Implementation
 */
trait IteratorTrait
{
    use BaseArrayTrait;

    /**
     * Return the current element
     *
     * @return mixed
     */
    public function current()
    {
        return current($this->elements);
    }

    /**
     * Move forward to next element and return it
     */
    public function next()
    {
        return next($this->elements);
    }

    /**
     * Return the key of the current element
     *
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return key($this->elements);
    }

    /**
     * Checks if current position is valid
     *
     * @return boolean true on success or false on failure.
     */
    public function valid()
    {
        return (null !== $this->key());
    }

    /**
     * Rewind the Iterator to the first element
     */
    public function rewind()
    {
        reset($this->elements);
    }
}
