# yannoff/collections

A simple object implementation of PHP arrays.

[![Latest Stable Version](https://poser.pugx.org/yannoff/collections/v/stable)](https://packagist.org/packages/yannoff/collections)
[![Total Downloads](https://poser.pugx.org/yannoff/collections/downloads)](https://packagist.org/packages/yannoff/collections)
[![License](https://poser.pugx.org/yannoff/collections/license)](https://packagist.org/packages/yannoff/collections)

## The concept

Based upon the Decorator design pattern, the aim is to provide a flexible, object-oriented alternative to PHP Arrays.

## Installation

Using [composer](https://getcomposer.org/):

```bash
$ composer require yannoff/collections
```

## Usage

Example: PHP Array vs Collection

_The classic way - native PHP arrays:_

```php
<?php

// Using PHP native arrays, the classic way:
$countries = [ 'France', 'Italia' ];

// Push an element
array_push($countries, 'Switzerland');

// Append an element
$countries[] = 'Belgium';

```

_The new way - using collections:_

```php
<?php

use Yannoff\Component\Collections\Collection;

// Using collections:
$countries = new Collection([ 'France', 'Italia' ]);

// Push an element
$countries->push('Switzerland');

// Append an element: the same syntax as for arrays
$countries[] = 'Belgium';

// Exporting the collection back to a native PHP array:
$array = $countries->all();

// As for native arrays, collections can be traversed with a foreach:
foreach($countries as $key => $value) {
    // ...
}

```

### Methods 

_See the [full method list](/doc/api/Collection.md) for more details._

Array / Collection method equivalences:

|Array|Collection|
|-----|----------|
|implode($glue, $array)|$collection->join($glue)|
|array_filter($array, $callback, $flag)|$collection->filter($callback, $flag)|
|array_flip($array)|$collection->flip()|
|array_keys($array)|$collection->keys()|
|array_map($callback, $array, ..$arrays)|$collection->map($callback, ...$arrays)|
|array_pop(&$array)|$collection->pop()|
|array_push(&$array, $element)|$collection->push($element)|
|array_reverse($array)|$collection->reverse()|
|array_search($needle, $array)|$collection->search($needle)|
|array_slice($array, $offset, $length)|$collection->slice($offset, $length)|
|array_shift(&$array)|$collection->shift()|
|array_unique($array, $flags)|$collection->unique($flags)|
|array_unshift(&$array, $element)|$collection->unshift($element)|
|array_walk(&$array, $callback, $userdata)|$collection->walk($callback, $userdata)|
|current(&$array)|$collection->current()|
|end(&$array)|$collection->end()|
|next(&$array)|$collection->next()|
|prev(&$array)|$collection->prev()|
|sort(&$array)|$collection->sort()|
|asort(&$array)|$collection->asort()|
|ksort(&$array)|$collection->ksort()|

Along with those classical PHP methods wrappers, a few _bag_ methods are provided:

|method|description|
|------|-----------|
|add($key, $element)|Add an element at the given key in the collection|
|all()|Return all the collection elements|
|clear()|Remove all elements from the collection|
|get($key)|Get an element of the collection by its key|
|has($key)|Check for existence of the given key in the collection|
|set($elements)|Set the whole elements of the collection|



## License

Released under the [MIT License](LICENSE)
