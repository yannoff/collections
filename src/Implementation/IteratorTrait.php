<?php
/**
 * This file is part of the yannoff/collections library
 * (c) 2019 Yannoff (https://github.com/yannoff)
 *
 * @project   yannoff/collections
 * @link      https://github.com/yannoff/collections
 * @license   http://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yannoff\Component\Collections\Implementation;

use ReturnTypeWillChange;

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
     * Returns the element that's currently being pointed to by the internal pointer.
     *
     * @return mixed The current element or **false** if the internal pointer is beyond the end or collection is empty
     */
    #[ReturnTypeWillChange]
    public function current()
    {
        return current($this->elements);
    }

    /**
     * Advances the internal pointer one place forward before returning the element
     *
     * @return mixed The next place element or **false** if there are no more elements
     */
    #[ReturnTypeWillChange]
    public function next()
    {
        return next($this->elements);
    }

    /**
     * Rewinds the internal array pointer one place backward before returning the element
     *
     * @return mixed The previous place element or **false** if there are no more elements
     */
    #[ReturnTypeWillChange]
    public function prev()
    {
        return prev($this->elements);
    }

    /**
     * Advances internal pointer to the last element, and returns its value
     *
     * @return mixed The last element or **false** if collection is empty
     */
    #[ReturnTypeWillChange]
    public function end()
    {
        return end($this->elements);
    }

    /**
     * Return the key of the current element
     *
     * @return mixed scalar on success, or null on failure.
     */
    #[ReturnTypeWillChange]
    public function key()
    {
        return key($this->elements);
    }

    /**
     * Checks if current position is valid
     *
     * @return boolean true on success or false on failure.
     */
    #[ReturnTypeWillChange]
    public function valid()
    {
        return (null !== $this->key());
    }

    /**
     * Rewind the Iterator to the first element
     */
    #[ReturnTypeWillChange]
    public function rewind()
    {
        reset($this->elements);
    }
}
