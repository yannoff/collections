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

/**
 * Class CollectionFactory
 * Provide a few factory methods to build a collection
 *
 * @package Yannoff\Component\Collections
 */
class CollectionFactory
{
    /**
     * Main factory entrypoint method.
     * Create a collection from the given array.
     *
     * @param array $array
     *
     * @return Collection
     */
    public static function create($array)
    {
        $collection = new Collection($array);

        return $collection;
    }

    /**
     * Build a collection from the source array by applying the given filter .
     *
     * @param array    $array    Source array
     * @param callable $callback Callback to be applied.
     * @param int      $flag     Flag determining what arguments are passed to the callback.
     *
     * Possible values for the $flag parameter:
     *    - ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value
     *    - ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value
     * Default is 0 which will pass value as the only argument to callback instead.
     *
     * @return Collection The filtered elements collection
     */
    public static function filter($array, $callback, $flag = 0)
    {
        $collection = self::create($array);

        return $collection->filter($callback, $flag);
    }

    /**
     * Build a collection by splitting the string on boundaries formed by the delimiter
     *
     * @param string $delimiter The boundary string
     * @param string $string    The string to split
     * @param int    $limit     Optionally limit elements with the last element containing the rest of the string
     *
     * @return Collection
     */
    public static function explode($delimiter, $string, $limit = PHP_INT_MAX)
    {
        $array = explode($delimiter, $string, $limit);

        return self::create($array);
    }
}