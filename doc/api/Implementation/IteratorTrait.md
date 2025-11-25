[&laquo; Back to README](/README.md)



# IteratorTrait method list

## Synopsis

```php
use Yannoff\Component\Collections\Implementation\IteratorTrait;
```



## <a name="current">`IteratorTrait::current()`</a>

```php
IteratorTrait::current(): mixed
```

*Returns the element that's currently being pointed to by the internal pointer.*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_The current element or **false** if the internal pointer is beyond the end or collection is empty_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="end">`IteratorTrait::end()`</a>

```php
IteratorTrait::end(): mixed
```

*Advances internal pointer to the last element, and returns its value*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_The last element or **false** if collection is empty_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="key">`IteratorTrait::key()`</a>

```php
IteratorTrait::key(): mixed
```

*Return the key of the current element*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_scalar on success, or null on failure._

> type: [mixed][php:mixed]


<br/><br/>

## <a name="next">`IteratorTrait::next()`</a>

```php
IteratorTrait::next(): mixed
```

*Advances the internal pointer one place forward before returning the element*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_The next place element or **false** if there are no more elements_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="prev">`IteratorTrait::prev()`</a>

```php
IteratorTrait::prev(): mixed
```

*Rewinds the internal array pointer one place backward before returning the element*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_The previous place element or **false** if there are no more elements_

> type: [mixed][php:mixed]


<br/><br/>

## <a name="rewind">`IteratorTrait::rewind()`</a>

```php
IteratorTrait::rewind()
```

*Rewind the Iterator to the first element*</br>

> access: public <br/>

### Arguments

>_No arguments._

### Return value

>_No return value._


<br/><br/>

## <a name="valid">`IteratorTrait::valid()`</a>

```php
IteratorTrait::valid(): boolean
```

*Checks if current position is valid*</br>


> access: public <br/>

### Arguments

>_No arguments._

### Return value

_true on success or false on failure._

> type: [boolean][php:boolean]


<br/><br/>


[self]: IteratorTrait.md
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