[&laquo; Back to README](/README.md)



# Factory method list

## Synopsis

```php
use Yannoff\Component\Collections\Factory;
```



## <a name="create">`Factory::create()`</a>

```php
Factory::create(array $elements, string $class): Collection
```

*Main factory entrypoint method.*</br>
*Create a collection from the given array.*</br>


> access: public <br/>

### Arguments

Name|Type|Description
----|----|-----------
$elements|[array][php:array]|An optional array of elements to populate the collection
$class|[string][php:string]|Class name of the Collection object to create (defaults to Collection)<br/>

### Return value


> type: [Collection](/doc/api/Collection.md)


### Exceptions

Type|Description
----|-----------
[LogicException][php:LogicException]|If the queried class is not a Collection instance

<br/><br/>

## <a name="explode">`Factory::explode()`</a>

```php
Factory::explode(string $delimiter, string $string, string $class, int $limit): Collection
```

*Build a collection by splitting the string on boundaries formed by the delimiter*</br>


> access: public <br/>

### Arguments

Name|Type|Description
----|----|-----------
$delimiter|[string][php:string]|The boundary string
$string|[string][php:string]|The string to split
$class|[string][php:string]|Optional alternative class name of the Collection object to create
$limit|[int][php:int]|Optionally limit elements with the last element containing the rest of the string<br/>

### Return value


> type: [Collection](/doc/api/Collection.md)


<br/><br/>

## <a name="filter">`Factory::filter()`</a>

```php
Factory::filter(array $elements, callable $callback, string $class, int $flag): Collection
```

*Build a collection from the source array by applying the given filter .*</br>


> access: public <br/>

### Arguments

Name|Type|Description
----|----|-----------
$elements|[array][php:array]|Source array
$callback|[callable][php:callable]|Callback to be applied.
$class|[string][php:string]|Optional alternative class name of the Collection object to create
$flag|[int][php:int]|Flag determining what arguments are passed to the callback.<br/><br/>Possible values for the $flag parameter:<br/>- ARRAY_FILTER_USE_KEY - pass key as the only argument to callback instead of the value<br/>- ARRAY_FILTER_USE_BOTH - pass both value and key as arguments to callback instead of the value<br/>Default is 0 which will pass value as the only argument to callback instead.<br/>

### Return value

_The filtered elements collection_

> type: [Collection](/doc/api/Collection.md)


<br/><br/>


[self]: Factory.md
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

<!-- Generated: 2025-11-25 18:47:26 +01:00 -->