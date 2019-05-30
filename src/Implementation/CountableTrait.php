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
