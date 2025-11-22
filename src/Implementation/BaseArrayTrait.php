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
 * Trait BaseArrayTrait
 * Implement the $elements property common to every classes.
 *
 * @package Yannoff\Component\Collections\Implementation
 */
trait BaseArrayTrait
{
    /**
     * The property holding the collection elements array
     *
     * @var array
     */
    protected $elements = [];
}
