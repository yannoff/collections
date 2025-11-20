[&laquo; Back to README](/README.md)



# Map method list

## Synopsis

```php
use Yannoff\Component\Collections\Map;
```



## <a name="__construct">`Map::__construct()`</a>

```php
Map::__construct(array $elements)
```

*Collection constructor.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collection__construct) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$elements|[array][php:array]|

### Return value

>_No return value._


<br/><br/>

## <a name="add">`Map::add()`</a>

```php
Map::add(mixed $key, mixed $element)
```

*Add an element at the given key in the collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionadd) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$key|[mixed][php:mixed]|Key/offset.
$element|[mixed][php:mixed]|Element to add.

### Return value

>_No return value._


<br/><br/>

## <a name="all">`Map::all()`</a>

```php
Map::all()
```

*Return all the collection elements.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionall) <br/>

### Arguments

>_No arguments._

### Return value


> type: [array][php:array]


<br/><br/>

## <a name="asort">`Map::asort()`</a>

```php
Map::asort(int $flags)
```

*Sort the collection elements by their value with index associations maintained*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionasort) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$flags|[int][php:int]|A bitwise disjunction of sorting behavior flags<br/>

### Return value


> type: [self][self]


<br/><br/>

## <a name="clear">`Map::clear()`</a>

```php
Map::clear()
```

*Remove all elements from the collection.*</br>

> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionclear) <br/>

### Arguments

>_No arguments._

### Return value

>_No return value._


<br/><br/>

## <a name="count">`Map::count()`</a>

```php
Map::count()
```

*Return elements count in the collection*</br>


> access: public <br/>
> inherited from: [CountableTrait](/doc/api/Implementation/CountableTrait.md#countabletraitcount) <br/>

### Arguments

>_No arguments._

### Return value

_The custom count as an integer._

> type: [int][php:int]


<br/><br/>

## <a name="current">`Map::current()`</a>

```php
Map::current()
```

*Returns the element that's currently being pointed to by the internal pointer.*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitcurrent) <br/>

### Arguments

>_No arguments._

### Return value

_The current element or **false** if the internal pointer is beyond the end or collection is empty_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="end">`Map::end()`</a>

```php
Map::end()
```

*Advances internal pointer to the last element, and returns its value*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitend) <br/>

### Arguments

>_No arguments._

### Return value

_The last element or **false** if collection is empty_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="filter">`Map::filter()`</a>

```php
Map::filter(callable $callback, int $flag)
```

*Apply a user supplied function to filter elements.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionfilter) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$callback|[callable][php:callable]|Callback to be applied.
$flag|[int][php:int]|Flag determining what arguments are passed to the callback.<br/><br/>Possible values for the **$flag** parameter:<br/>- `ARRAY_FILTER_USE_KEY` : pass key as the only argument to callback instead of the value.<br/>- `ARRAY_FILTER_USE_BOTH` : pass both value and key as arguments to callback instead of the value.<br/><br/>Default is `0` which will pass value as the only argument to callback instead.<br/>

### Return value

_The filtered version of the collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="flip">`Map::flip()`</a>

```php
Map::flip()
```

*Flip collection: set value as keys & keys as values.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionflip) <br/>

### Arguments

>_No arguments._

### Return value

_The flipped version of the collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="get">`Map::get()`</a>

```php
Map::get(mixed $key)
```

*Get an element of the collection by its key.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionget) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$key|[mixed][php:mixed]|The requested element's key.<br/>

### Return value


> type: [mixed][php:mixed]


<br/><br/>

## <a name="has">`Map::has()`</a>

```php
Map::has(mixed $key)
```

*Check for existence of the given key in the collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionhas) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$key|[mixed][php:mixed]|The searched key.<br/>

### Return value

_true if the key is found, false otherwise._

> type: [bool][php:bool]


<br/><br/>

## <a name="join">`Map::join()`</a>

```php
Map::join(string $glue)
```

*Build a string by concatening all elements with the given glue.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionjoin) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$glue|[string][php:string]|The concatening string.<br/>

### Return value


> type: [string][php:string]


<br/><br/>

## <a name="key">`Map::key()`</a>

```php
Map::key()
```

*Return the key of the current element*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitkey) <br/>

### Arguments

>_No arguments._

### Return value

_scalar on success, or null on failure._

> type: [mixed][php:mixed]


<br/><br/>

## <a name="keys">`Map::keys()`</a>

```php
Map::keys()
```

*Return all the keys of the collection.*</br>
*NOTE: Filtering on a search value to fetch a subset of the keys is not implemented.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionkeys) <br/>

### Arguments

>_No arguments._

### Return value


> type: [array][php:array]


<br/><br/>

## <a name="ksort">`Map::ksort()`</a>

```php
Map::ksort(int $flags)
```

*Sort the collection elements by their key*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionksort) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$flags|[int][php:int]|A bitwise disjunction of sorting behavior flags<br/>

### Return value


> type: [self][self]


<br/><br/>

## <a name="map">`Map::map()`</a>

```php
Map::map(callable $callback, array|null ...$arrays)
```

*Apply a user defined mapping function to build a new collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionmap) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$callback|[callable][php:callable]|Callback to be applied.
...$arrays|[array][php:array] &#124; [null][php:null]|Supplementary variable list of array arguments to run through the callback function.<br/>

### Return value

_The mapped collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="next">`Map::next()`</a>

```php
Map::next()
```

*Advances the internal pointer one place forward before returning the element*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitnext) <br/>

### Arguments

>_No arguments._

### Return value

_The next place element or **false** if there are no more elements_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="offsetExists">`Map::offsetExists()`</a>

```php
Map::offsetExists(mixed $offset)
```

*Check wether the given offset exists in the collection*</br>


> access: public <br/>
> inherited from: [ArrayAccessTrait](/doc/api/Implementation/ArrayAccessTrait.md#arrayaccesstraitoffsetExists) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$offset|[mixed][php:mixed]|An offset to check for.<br/>

### Return value

_true on success or false on failure._

> type: [boolean][php:boolean]


<br/><br/>

## <a name="offsetGet">`Map::offsetGet()`</a>

```php
Map::offsetGet(mixed $offset)
```

*Get the element at the given offset*</br>


> access: public <br/>
> inherited from: [ArrayAccessTrait](/doc/api/Implementation/ArrayAccessTrait.md#arrayaccesstraitoffsetGet) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$offset|[mixed][php:mixed]|The offset to retrieve.<br/>

### Return value


> type: [mixed][php:mixed]


<br/><br/>

## <a name="offsetSet">`Map::offsetSet()`</a>

```php
Map::offsetSet(mixed $offset, mixed $value)
```

*Set the element at the given offset*</br>


> access: public <br/>
> inherited from: [ArrayAccessTrait](/doc/api/Implementation/ArrayAccessTrait.md#arrayaccesstraitoffsetSet) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$offset|[mixed][php:mixed]|The offset to assign the value to.
$value|[mixed][php:mixed]|The value to set.

### Return value

>_No return value._


<br/><br/>

## <a name="offsetUnset">`Map::offsetUnset()`</a>

```php
Map::offsetUnset(mixed $offset)
```

*Unset the element at the given offset*</br>


> access: public <br/>
> inherited from: [ArrayAccessTrait](/doc/api/Implementation/ArrayAccessTrait.md#arrayaccesstraitoffsetUnset) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$offset|[mixed][php:mixed]|The offset to unset.

### Return value

>_No return value._


<br/><br/>

## <a name="pop">`Map::pop()`</a>

```php
Map::pop()
```

*Pop the element of the end of the collection and return it.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionpop) <br/>

### Arguments

>_No arguments._

### Return value

_The popped element._

> type: [mixed][php:mixed]


<br/><br/>

## <a name="prev">`Map::prev()`</a>

```php
Map::prev()
```

*Rewinds the internal array pointer one place backward before returning the element*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitprev) <br/>

### Arguments

>_No arguments._

### Return value

_The previous place element or **false** if there are no more elements_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="push">`Map::push()`</a>

```php
Map::push(mixed $element)
```

*Push one element onto the end of the collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionpush) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$element|[mixed][php:mixed]|

### Return value

_The new number of elements in the collection._

> type: [int][php:int]


<br/><br/>

## <a name="reverse">`Map::reverse()`</a>

```php
Map::reverse()
```

*Return all elements of the collection in reversed order.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionreverse) <br/>

### Arguments

>_No arguments._

### Return value

_The reversed version of the collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="rewind">`Map::rewind()`</a>

```php
Map::rewind()
```

*Rewind the Iterator to the first element*</br>

> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitrewind) <br/>

### Arguments

>_No arguments._

### Return value

>_No return value._


<br/><br/>

## <a name="search">`Map::search()`</a>

```php
Map::search(mixed $needle)
```

*Search the collection for a given value and returns the first corresponding key if successful.*</br>
*NOTE: The strict flag is not implemented for now.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionsearch) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$needle|[mixed][php:mixed]|The value to search.<br/>

### Return value

_The key/offset if found, false otherwise._

> type: [false][php:false] **&#124;** [int][php:int] **&#124;** [string][php:string]


<br/><br/>

## <a name="set">`Map::set()`</a>

```php
Map::set(array $elements)
```

*Set the whole elements of the collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionset) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$elements|[array][php:array]|An elements array.

### Return value

>_No return value._


<br/><br/>

## <a name="shift">`Map::shift()`</a>

```php
Map::shift()
```

*Shift an element off the beginning of the collection and return it.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionshift) <br/>

### Arguments

>_No arguments._

### Return value

_The shifted element._

> type: [mixed][php:mixed]


<br/><br/>

## <a name="slice">`Map::slice()`</a>

```php
Map::slice(int $offset, int $length)
```

*Extract a slice of $length elements from the $offset-th element.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionslice) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$offset|[int][php:int]|The element to start from
$length|[int][php:int]|The number of elements to extract<br/>

### Return value

_The sliced version of the collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="sort">`Map::sort()`</a>

```php
Map::sort(int $flags)
```

*Sort the collection elements by their value*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionsort) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$flags|[int][php:int]|A bitwise disjunction of sorting behavior flags<br/>

### Return value


> type: [self][self]


<br/><br/>

## <a name="unique">`Map::unique()`</a>

```php
Map::unique(int $flags)
```

*Removes duplicate values from the collection*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionunique) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$flags|[int][php:int]|A bitwise disjunction of flags to modify the comparing behavior.<br/><br/>Available values that can be used for the **$flags** parameter:<br/>- `SORT_REGULAR` - compare items normally (don't change types)<br/>- `SORT_NUMERIC` - compare items numerically<br/>- `SORT_STRING` - compare items as strings<br/>- `SORT_LOCALE_STRING` - compare items as strings, based on the current locale.<br/><br/>Default value for the flags is `SORT_STRING`<br/>

### Return value

_The filtered collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="unshift">`Map::unshift()`</a>

```php
Map::unshift(mixed $element)
```

*Prepend an element to the beginning of the collection.*</br>
*NOTE: Prepending multiple elemnts is not supported.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionunshift) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$element|[mixed][php:mixed]|The element to prepend.<br/>

### Return value

_The new number of elements in the collection._

> type: [int][php:int]


<br/><br/>

## <a name="valid">`Map::valid()`</a>

```php
Map::valid()
```

*Checks if current position is valid*</br>


> access: public <br/>
> inherited from: [IteratorTrait](/doc/api/Implementation/IteratorTrait.md#iteratortraitvalid) <br/>

### Arguments

>_No arguments._

### Return value

_true on success or false on failure._

> type: [boolean][php:boolean]


<br/><br/>

## <a name="walk">`Map::walk()`</a>

```php
Map::walk(callable $callback, mixed|null $userdata)
```

*Apply a user supplied function to each element of the collection.*</br>


> access: public <br/>
> inherited from: [Collection](/doc/api/Collection.md#collectionwalk) <br/>

### Arguments

Name|Type|Description
----|----|-----------
$callback|[callable][php:callable]|Callback to be applied.
$userdata|[mixed][php:mixed] &#124; [null][php:null]|Optional user data to be passed the callback to.<br/>

### Return value

_(always true)_

> type: [bool][php:bool]


<br/><br/>


[self]: Map.md
[php:array]: https://www.php.net/manual/language.types.array.php "PHP Built-in: array"
[php:bool]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: bool"
[php:boolean]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: boolean"
[php:callable]: https://www.php.net/manual/language.types.callable.php "PHP Built-in: callable"
[php:false]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: false"
[php:float]: https://www.php.net/manual/language.types.float.php "PHP Built-in: float"
[php:int]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: int"
[php:integer]: https://www.php.net/manual/language.types.integer.php "PHP Built-in: integer"
[php:mixed]: https://www.php.net/manual/language.types.mixed.php "PHP Built-in: mixed"
[php:null]: https://www.php.net/manual/language.types.null.php "PHP Built-in: null"
[php:object]: https://www.php.net/manual/language.types.object.php "PHP Built-in: object"
[php:resource]: https://www.php.net/manual/language.types.resource.php "PHP Built-in: resource"
[php:string]: https://www.php.net/manual/language.types.string.php "PHP Built-in: string"
[php:true]: https://www.php.net/manual/language.types.boolean.php "PHP Built-in: true"
[php:ArrayAccess]: https://www.php.net/manual/class.arrayaccess.php "PHP Built-in: ArrayAccess"
[php:Closure]: https://www.php.net/manual/class.closure.php "PHP Built-in: Closure"
[php:Countable]: https://www.php.net/manual/class.countable.php "PHP Built-in: Countable"
[php:Directory]: https://www.php.net/manual/class.directory.php "PHP Built-in: Directory"
[php:Error]: https://www.php.net/manual/class.error.php "PHP Built-in: Error"
[php:Exception]: https://www.php.net/manual/class.exception.php "PHP Built-in: Exception"
[php:LogicException]: https://www.php.net/manual/class.logicexception.php "PHP Built-in: LogicException"
[php:Iterable]: https://www.php.net/manual/class.iterable.php "PHP Built-in: Iterable"
[php:Iterator]: https://www.php.net/manual/class.iterator.php "PHP Built-in: Iterator"
[php:RuntimeException]: https://www.php.net/manual/class.runtimeexception.php "PHP Built-in: RuntimeException"
[php:Reflector]: https://www.php.net/manual/class.reflector.php "PHP Built-in: Reflector"
[php:ReflectionClass]: https://www.php.net/manual/class.reflectionclass.php "PHP Built-in: ReflectionClass"
[php:ReflectionFunction]: https://www.php.net/manual/class.reflectionfunction.php "PHP Built-in: ReflectionFunction"
[php:ReflectionProperty]: https://www.php.net/manual/class.reflectionproperty.php "PHP Built-in: ReflectionProperty"
[php:ReflectionMethod]: https://www.php.net/manual/class.reflectionmethod.php "PHP Built-in: ReflectionMethod"
[php:ReflectionConstant]: https://www.php.net/manual/class.reflectionconstant.php "PHP Built-in: ReflectionConstant"
[php:StdClass]: https://www.php.net/manual/class.stdclass.php "PHP Built-in: StdClass"
[php:Throwable]: https://www.php.net/manual/class.throwable.php "PHP Built-in: Throwable"
[php:Traversable]: https://www.php.net/manual/class.traversable.php "PHP Built-in: Traversable"

[&laquo; Back to README](/README.md)

<!-- Generated: 2025-11-21 12:56:43 +01:00 -->