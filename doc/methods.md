# Collection Full method list

## Synopsis

```php
use Yannoff\Component\Collections\Collection;
```


## __construct()

_Collection constructor._

### Arguments

Name|Type|Description
----|----|-----------
$elements|array|

### Return value

_No return value._


---


## push()

_Push one element onto the end of the collection._

### Arguments

Name|Type|Description
----|----|-----------
$element|mixed|

### Return value

Type|Description
----|-----------
int|The new number of elements in the collection.


---

## pop()

_Pop the element of the end of the collection and return it._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The popped element.


---

## slice()

_Extract a slice of $length elements from $offset-th element._

### Arguments

Name|Type|Description
----|----|-----------
$offset|int|The element to start from
$length|int|The number of elements to extract

### Return value

Type|Description
----|-----------
Collection|


---

## shift()

_Shift an element off the beginning of the collection and return it._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The shifted element.


---

## unshift()

_Prepend an element to the beginning of the collection._

_NOTE: Prepending multiple elemnts is not supported._

### Arguments

Name|Type|Description
----|----|-----------
$element|mixed|The element to prepend.

### Return value

Type|Description
----|-----------
int|The new number of elements in the collection.


---

## keys()

_Return all the keys of the collection._

_NOTE: Filtering on a search value to fetch a subset of the keys is not implemented._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
array|


---

## search()

_Search the collection for a given value and returns the first corresponding key if successful._

_NOTE: The strict flag is not implemented for now._

### Arguments

Name|Type|Description
----|----|-----------
$needle|mixed|The value to search.

### Return value

Type|Description
----|-----------
false&#124;int&#124;string|The key/offset if found, false otherwise.


---

## join()

_Build a string by concatening all elements with the given glue._

### Arguments

Name|Type|Description
----|----|-----------
$glue|string|The concatening string.

### Return value

Type|Description
----|-----------
string|


---

## reverse()

_Return all elements of the collection in reversed order._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
Collection|


---

## flip()

_Flip collection: set value as keys &amp; keys as values._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
Collection|


---

## filter()

_Apply a user supplied function to filter elements._

### Arguments

Name|Type|Description
----|----|-----------
$callback|callable|Callback to be applied.
$flag|int|Flag determining what arguments are passed to the callback.

_Possible values for the **$flag** parameter:_
- _ARRAY_FILTER_USE_KEY: pass key as the only argument to callback instead of the value._
- _ARRAY_FILTER_USE_BOTH: pass both value and key as arguments to callback instead of the value._

_Default is 0 which will pass value as the only argument to callback instead._

### Return value

Type|Description
----|-----------
Collection|The filtered elements collection


---

## map()

_Apply a user defined mapping function to build a new collection.

### Arguments

Name|Type|Description
----|----|-----------
$callback|callable|Callback to be applied.
...$arrays|...array|null|Supplementary variable list of array arguments to run through the callback function.

### Return value

Type|Description
----|-----------
Collection|The mapped collection

---

## unique()

_Removes duplicate values from  the collection._

### Arguments

Name|Type|Description
----|----|-----------
$flags|int|A bitwise disjunction of flags to modify the comparing behavior.

_Available values that can be used for the **$flags** parameter:_
- *`SORT_REGULAR` - compare items normally (don't change types)*
- *`SORT_NUMERIC` - compare items numerically*
- *`SORT_STRING` - compare items as strings*
- *`SORT_LOCALE_STRING` - compare items as strings, based on the current locale.*

*Default value for the flags is `SORT_STRING`*

### Return value

Type|Description
----|-----------
Collection|The filtered elements collection


---

## walk()

_Apply a user supplied function to each element of the collection._

### Arguments

Name|Type|Description
----|----|-----------
$callback|callable|Callback to be applied.
$userdata|mixed&#124;null|Optional user data to be passed the callback to.

### Return value

Type|Description
----|-----------
bool|(always true)


---

## current()

_Returns the element that&#039;s currently being pointed to by the internal pointer._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The current element or **false** if the internal pointer is beyond the end or collection is empty


---

## end()

_Advances internal pointer to the last element, and returns its value_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The last element or **false** if collection is empty


---

## prev()

_Rewinds the internal array pointer one place backward before returning the element_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The previous place element or **false** if there are no more elements


---

## next()

_Advances the internal pointer one place forward before returning the element_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|The next place element or **false** if there are no more elements


---

## all()

_Return all the collection elements._

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
array|


---

## has()

_Check for existence of the given key in the collection._

### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|The searched key.

### Return value

Type|Description
----|-----------
bool|true if the key is found, false otherwise.


---

## get()

_Get an element of the collection by its key._

### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|The requested element&#039;s key.

### Return value

Type|Description
----|-----------
mixed|


---

## add()

_Add an element at the given key in the collection._

### Arguments

Name|Type|Description
----|----|-----------
$key|mixed|Key/offset.
$element|mixed|Element to add.

### Return value

_No return value._


---

## set()

_Set the whole elements of the collection._

### Arguments

Name|Type|Description
----|----|-----------
$elements|array|An elements array.

### Return value

_No return value._


---

## clear()

_Remove all elements from the collection._

### Arguments

_No arguments._

### Return value

_No return value._


---

## offsetExists()

_Check wether the given offset exists in the collection_

### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|An offset to check for.

### Return value

Type|Description
----|-----------
boolean|true on success or false on failure.


---

## offsetGet()

_Get the element at the given offset_

### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to retrieve.

### Return value

Type|Description
----|-----------
mixed|


---

## offsetSet()

_Set the element at the given offset_

### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to assign the value to.
$value|mixed|The value to set.

### Return value

_No return value._


---

## offsetUnset()

_Unset the element at the given offset_

### Arguments

Name|Type|Description
----|----|-----------
$offset|mixed|The offset to unset.

### Return value

_No return value._


---

## count()

_Return elements count in the collection_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
int|The custom count as an integer.


---

## key()

_Return the key of the current element_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
mixed|scalar on success, or null on failure.


---

## valid()

_Checks if current position is valid_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
boolean|true on success or false on failure.


---

## rewind()

_Rewind the Iterator to the first element_

### Arguments

_No arguments._

### Return value

_No return value._


---

## ksort()

_Sort elements by their key_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
Collection|The collection instance.


---

## sort()

_Sort elements by their value_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
Collection|The collection instance.


---

## asort()

_Sort elements by their value, but maintain index association_

### Arguments

_No arguments._

### Return value

Type|Description
----|-----------
Collection|The collection instance.


