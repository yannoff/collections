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

_See the [full method list](#full-method-list) section for more details._

Array / Collection method equivalences:

|Array|Collection|
|-----|----------|
|implode($glue, $array)|$collection->join($glue)|
|array_filter($array, $callback, $flag)|$collection->filter($callback, $flag)|
|array_flip($array)|$collection->flip()|
|array_keys($array)|$collection->keys()|
|array_pop(&$array)|$collection->pop()|
|array_push(&$array, $element)|$collection->push($element)|
|array_reverse($array)|$collection->reverse()|
|array_search($needle, $array)|$collection->search($needle)|
|array_shift(&$array)|$collection->shift()|
|array_unshift(&$array, $element)|$collection->unshift($element)|
|array_walk(&$array, $callback, $userdata)|$collection->walk($callback, $userdata)|
|current(&$array)|$collection->current()|
|end(&$array)|$collection->end()|
|next(&$array)|$collection->next()|
|prev(&$array)|$collection->prev()|

Along with those classical PHP methods wrappers, a few _bag_ methods are provided:

|method|description|
|------|-----------|
|add($key, $element)|Add an element at the given key in the collection|
|all()|Return all the collection elements|
|clear()|Remove all elements from the collection|
|get($key)|Get an element of the collection by its key|
|has($key)|Check for existence of the given key in the collection|
|set($elements)|Set the whole elements of the collection|


### Full method list

#### Synopsis

```php
use Yannoff\Component\Collections\Collection;
```


#### __construct()

_Collection constructor._

##### Arguments

Name|Type|Description
----|----|-----------
$elements|array|

##### Return value

_No return value._


---


#### push()

_Push one element onto the end of the collection._

##### Arguments

Name|Type|Description
----|----|-----------
$element|mixed|

##### Return value

Type|Description
----|-----------
int|The new number of elements in the collection.


---

#### pop()

_Pop the element of the end of the collection and return it._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The popped element.


---

#### shift()

_Shift an element off the beginning of the collection and return it._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The shifted element.


---

#### unshift()

_Prepend an element to the beginning of the collection._

_NOTE: Prepending multiple elemnts is not supported._

##### Arguments

Name|Type|Description
----|----|-----------
$element|mixed|The element to prepend.

##### Return value

Type|Description
----|-----------
int|The new number of elements in the collection.


---

#### keys()

_Return all the keys of the collection._

_NOTE: Filtering on a search value to fetch a subset of the keys is not implemented._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
array|


---

#### search()

_Search the collection for a given value and returns the first corresponding key if successful._

_NOTE: The strict flag is not implemented for now._

##### Arguments

Name|Type|Description
----|----|-----------
$needle|mixed|The value to search.

##### Return value

Type|Description
----|-----------
false&#124;int&#124;string|The key/offset if found, false otherwise.


---

#### join()

_Build a string by concatening all elements with the given glue._

##### Arguments

Name|Type|Description
----|----|-----------
$glue|string|The concatening string.

##### Return value

Type|Description
----|-----------
string|


---

#### reverse()

_Return all elements of the collection in reversed order._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
array|


---

#### flip()

_Flip collection: set value as keys &amp; keys as values._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
array|


---

#### filter()

_Apply a user supplied function to filter elements._

##### Arguments

Name|Type|Description
----|----|-----------
$callback|callable|Callback to be applied.
$flag|int|Flag determining what arguments are passed to the callback.

_Possible values for the **$flag** parameter:_
- _ARRAY_FILTER_USE_KEY: pass key as the only argument to callback instead of the value._
- _ARRAY_FILTER_USE_BOTH: pass both value and key as arguments to callback instead of the value._

_Default is 0 which will pass value as the only argument to callback instead._

##### Return value

Type|Description
----|-----------
Collection[]|The filtered elements collection


---

#### walk()

_Apply a user supplied function to each element of the collection._

##### Arguments

Name|Type|Description
----|----|-----------
$callback|callable|Callback to be applied.
$userdata|mixed&#124;null|Optional user data to be passed the callback to.

##### Return value

Type|Description
----|-----------
bool|(always true)


---

#### current()

_Returns the element that&#039;s currently being pointed to by the internal pointer._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The current element or **false** if the internal pointer is beyond the end or collection is empty


---

#### end()

_Advances internal pointer to the last element, and returns its value_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The last element or **false** if collection is empty


---

#### prev()

_Rewinds the internal array pointer one place backward before returning the element_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The previous place element or **false** if there are no more elements


---

#### next()

_Advances the internal pointer one place forward before returning the element_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|The next place element or **false** if there are no more elements


---

#### all()

_Return all the collection elements._

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
array|


---

#### has()

_Check for existence of the given key in the collection._

##### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|The searched key.

##### Return value

Type|Description
----|-----------
bool|true if the key is found, false otherwise.


---

#### get()

_Get an element of the collection by its key._

##### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|The requested element&#039;s key.

##### Return value

Type|Description
----|-----------
mixed|


---

#### add()

_Add an element at the given key in the collection._

##### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|Key/offset.
$element|mixed|Element to add.

##### Return value

_No return value._


---

#### set()

_Set the whole elements of the collection._

##### Arguments

Name|Type|Description
----|----|-----------
$elements|array|An elements array.

##### Return value

_No return value._


---

#### clear()

_Remove all elements from the collection._

##### Arguments

_No arguments._

##### Return value

_No return value._


---

#### offsetExists()

_Check wether the given offset exists in the collection_

##### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|An offset to check for.

##### Return value

Type|Description
----|-----------
boolean|true on success or false on failure.


---

#### offsetGet()

_Get the element at the given offset_

##### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to retrieve.

##### Return value

Type|Description
----|-----------
mixed|


---

#### offsetSet()

_Set the element at the given offset_

##### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to assign the value to.
$value|mixed|The value to set.

##### Return value

_No return value._


---

#### offsetUnset()

_Unset the element at the given offset_

##### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to unset.

##### Return value

_No return value._


---

#### count()

_Return elements count in the collection_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
int|The custom count as an integer.


---

#### key()

_Return the key of the current element_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
mixed|scalar on success, or null on failure.


---

#### valid()

_Checks if current position is valid_

##### Arguments

_No arguments._

##### Return value

Type|Description
----|-----------
boolean|true on success or false on failure.


---

#### rewind()

_Rewind the Iterator to the first element_

##### Arguments

_No arguments._

##### Return value

_No return value._



## License

Released under the [MIT License](LICENSE)
