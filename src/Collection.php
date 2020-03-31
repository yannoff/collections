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
     * Extract a slice of $length elements from the $offset-th element.
     *
     * @param int $offset The element to start from
     * @param int $length The number of elements to extract
     *
     * @return Collection The sliced version of the collection
     */
    public function slice($offset = 0, $length = null)
    {
        $slice = array_slice($this->elements, $offset, $length);

        return new static($slice);
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
     * Return all elements of the collection in reversed order.
     *
     * @return Collection The reversed version of the collection
     */
    public function reverse()
    {
        $reversed = array_reverse($this->elements);

        return new static($reversed);
    }

    /**
     * Flip collection: set value as keys & keys as values.
     *
     * @return Collection The flipped version of the collection
     */
    public function flip()
    {
        $flipped = array_flip($this->elements);

        return new static($flipped);
    }

    /**
     * Apply a user supplied function to filter elements.
     *
     * @param callable $callback Callback to be applied.
     * @param int      $flag     Flag determining what arguments are passed to the callback.
     *
     * Possible values for the **$flag** parameter:
     *    - ARRAY_FILTER_USE_KEY: pass key as the only argument to callback instead of the value.
     *    - ARRAY_FILTER_USE_BOTH: pass both value and key as arguments to callback instead of the value.
     * Default is 0 which will pass value as the only argument to callback instead.
     *
     * @return Collection The filtered version of the collection
     */
    public function filter($callback, $flag = 0)
    {
        $filtered = array_filter($this->elements, $callback, $flag);

        return new static($filtered);
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
     * Returns the element that's currently being pointed to by the internal pointer.
     *
     * @return mixed The current element or **false** if the internal pointer is beyond the end or collection is empty
     */
    public function current()
    {
        return current($this->elements);
    }

    /**
     * Advances internal pointer to the last element, and returns its value
     *
     * @return mixed The last element or **false** if collection is empty
     */
    public function end()
    {
        return end($this->elements);
    }

    /**
     * Rewinds the internal array pointer one place backward before returning the element
     *
     * @return mixed The previous place element or **false** if there are no more elements
     */
    public function prev()
    {
        return prev($this->elements);
    }

    /**
     * Advances the internal pointer one place forward before returning the element
     *
     * @return mixed The next place element or **false** if there are no more elements
     */
    public function next()
    {
        return next($this->elements);
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
