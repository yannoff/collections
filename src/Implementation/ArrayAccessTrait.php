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
 * Trait ArrayAccessTrait
 * Implement the methods required by the ArrayAccess interface.
 * @see https://www.php.net/manual/en/class.arrayaccess.php
 *
 * @package Yannoff\Component\Collections\Implementation
 */
trait ArrayAccessTrait
{
    use BaseArrayTrait;

    /**
     * Check wether the given offset exists in the collection
     *
     * @param mixed $offset An offset to check for.
     *
     * @return boolean true on success or false on failure.
     */
    #[ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->elements);
    }

    /**
     * Get the element at the given offset
     *
     * @param mixed $offset The offset to retrieve.
     *
     * @return mixed
     */
    #[ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->elements[$offset];
    }

    /**
     * Set the element at the given offset
     *
     * @param mixed $offset The offset to assign the value to.
     * @param mixed $value  The value to set.
     */
    #[ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        $this->elements[$offset] = $value;
    }

    /**
     * Unset the element at the given offset
     *
     * @param mixed $offset The offset to unset.
     */
    #[ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->elements[$offset]);
    }
}

