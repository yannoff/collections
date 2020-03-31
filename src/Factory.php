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

use LogicException;

/**
 * Class Factory
 * Provide a few factory methods to build a collection
 *
 * @package Yannoff\Component\Collections
 */
class Factory
{
    /**
     * Main factory entrypoint method.
     * Create a collection from the given array.
     *
     * @param array  $elements An optional array of elements to populate the collection
     * @param string $class    Class name of the Collection object to create (defaults to Collection)
     *
     * @return Collection
     * @throws LogicException If the queried class is not a Collection instance
     */
    public static function create($elements = [], $class = Collection::class)
    {
        $collection = new $class($elements);

        if (!$collection instanceof Collection) {
            $error = sprintf('First argument must be an instance of "%s", "%s" given.', Collection::class, $class);
            throw new LogicException($error);
        }

        return $collection;
    }

    /**
     * Build a collection from the source array by applying the given filter .
     *
     * @param array    $elements Source array
     * @param callable $callback Callback to be applied.
     * @param string   $class    Optional alternative class name of the Collection object to create
     * @param int      $flag     Flag determining what arguments are passed to the callback.
     *
     * Possible values for the $flag parameter:
     *    - ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
     *    - ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
     * Default is 0 which will pass value as the only argument to callback instead.
     *
     * @return Collection The filtered elements collection
     */
    public static function filter($elements, $callback, $class = Collection::class, $flag = 0)
    {
        $collection = self::create($elements, $class);

        return $collection->filter($callback, $flag);
    }

    /**
     * Build a collection by splitting the string on boundaries formed by the delimiter
     *
     * @param string $delimiter The boundary string
     * @param string $string    The string to split
     * @param string $class     Optional alternative class name of the Collection object to create
     * @param int    $limit     Optionally limit elements with the last element containing the rest of the string
     *
     * @return Collection
     */
    public static function explode($delimiter, $string, $class = Collection::class, $limit = PHP_INT_MAX)
    {
        $elements = explode($delimiter, $string, $limit);

        return self::create($elements, $class);
    }
}
