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

namespace Yannoff\Component\Collections;

use ArrayAccess;
use Countable;
use Iterator;
use Yannoff\Component\Collections\Implementation\ArrayAccessTrait;
use Yannoff\Component\Collections\Implementation\BaseArrayTrait;
use Yannoff\Component\Collections\Implementation\CountableTrait;
use Yannoff\Component\Collections\Implementation\IteratorTrait;

/**
 * Class Collection
 *
 * @package Yannoff\Component\Collections
 */
class Collection  implements ArrayAccess, Iterator, Countable
{
    use BaseArrayTrait;
    use ArrayAccessTrait;
    use CountableTrait;
    use IteratorTrait;

    /**
     * Collection constructor.
     *
     * @param array $elements
     */
    public function __construct($elements = [])
    {
        $this->elements = $elements;
    }

    /**
     * Push one element onto the end of the collection.
     *
     * @param mixed $element
     *
     * @return int The new number of elements in the collection.
     */
    public function push($element)
    {
        return array_push($this->elements, $element);
    }

    /**
     * Pop the element of the end of the collection and return it.
     *
     * @return mixed The popped element.
     */
    public function pop()
    {
        return array_pop($this->elements);
    }

    /**
     * Shift an element off the beginning of the collection and return it.
     *
     * @return mixed The shifted element.
     */
    public function shift()
    {
        return array_shift($this->elements);
    }

    /**
     * Prepend an element to the beginning of the collection.
     * NOTE: Prepending multiple elemnts is not supported.
     *
     * @param mixed $element The element to prepend.
     *
     * @return int The new number of elements in the collection.
     */
    public function unshift($element)
    {
        return array_unshift($this->elements, $element);
    }

    /**
     * Return all the keys of the collection.
     * NOTE: Filtering on a search value to fetch a subset of the keys is not implemented.
     *
     * @return array
     */
    public function keys()
    {
        return array_keys($this->elements);
    }

    /**
     * Search the collection for a given value and returns the first corresponding key if successful.
     * NOTE: The strict flag is not implemented for now.
     *
     * @param mixed $needle The value to search.
     *
     * @return false|int|string The key/offset if found, false otherwise.
     */
    public function search($needle)
    {
        return array_search($needle, $this->elements);
    }

    /**
     * Build a string by concatening all elements with the given glue.
     *
     * @param string $glue The concatening string.
     *
     * @return string
     */
    public function join($glue = '')
    {
        return implode($glue, $this->elements);
    }

    /**
     * Apply a user supplied function to each element of the collection.
     *
     * @param callable   $callback Callback to be applied.
     * @param mixed|null $userdata Optional user data to be passed the callback to.
     *
     * @return bool (always true)
     */
    public function walk($callback, $userdata = null)
    {
        return array_walk($this->elements, $callback, $userdata);
    }

    /**
     * Return all the collection elements.
     *
     * @return array
     */
    public function all()
    {
        return $this->elements;
    }

    /**
     * Check for existence of the given key in the collection.
     *
     * @param mixed $key The searched key.
     *
     * @return bool true if the key is found, false otherwise.
     */
    public function has($key)
    {
        return array_key_exists($key, $this->elements);
    }

    /**
     * Get an element of the collection by its key.
     *
     * @param mixed $key The requested element's key.
     *
     * @return mixed
     */
    public function get($key)
    {
        return $this->elements[$key];
    }

    /**
     * Add an element at the given key in the collection.
     *
     * @param mixed $key     Key/offset.
     * @param mixed $element Element to add.
     */
    public function add($key, $element)
    {
        $this->elements[$key] = $element;
    }

    /**
     * Set the whole elements of the collection.
     *
     * @param array $elements An elements array.
     */
    public function set($elements)
    {
        $this->elements = $elements;
    }

    /**
     * Remove all elements from the collection.
     */
    public function clear()
    {
        $this->elements = [];
    }
}
