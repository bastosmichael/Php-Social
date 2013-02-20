Php-Social
==========

Social Media Skeleton for Php using Composer and PhpSpec2 testing

$ php composer.phar install --dev

# Installing PhpSpec2 and Behat Testing

```
$ php composer.phar install --dev
```

# Running & Creating PHPSpec2 Tests

## Command Line Tests to Run

`$ bin/phpspec run`

`$ bin/phpspec run -f dots`

`$ bin/phpspec --help`

## Creating a method in a Test Class

```
it_should_do_something(){
	$this->method()->shouldReturn('something');
}

its_suppose_to_do_something(){
	$this->method()->shouldBe('something');
}
```

## Creating the required methods to call

### Checking Identify (Like using the === operator)

#### Returning Data Type or Object
```
$this->some_method_or_variable->shouldReturn($something);
$this->some_method_or_variable->shouldNotReturn($something);
```

#### Being Data Type or Object
```
$this->some_method_or_variable->shouldBe($something);
$this->some_method_or_variable->shouldNotBe($something);
```

#### Equal Data Type or Object
```
$this->some_method_or_variable->shouldEqual($something);
$this->some_method_or_variable->shouldNotEqual($something);
```

#### BeEqualTo Data Type or Object
```
$this->some_method_or_variable->shouldBeEqualTo($something);
$this->some_method_or_variable->shouldNotBeEqualTo($something);
```

### Checking Comparison (Like using the == operator)

#### Be Like Data Type or Object
```
$this->some_method_or_variable->shouldBeLike($something);
$this->some_method_or_variable->shouldNotBeLike($something);
```

### Checking Exception Throws (Add 'use RuntimeException;' to start throwing exceptions)

#### Throw exception
```
$this->shouldThrow(new SomeException('Give it a name'))->during('some_method', [some_variable]);
$this->shouldNotThrow(new SomeException('Give it a name'))->during('some_method', [some_variable]);
```

### Checking Type (Make's sure an object is what it's suppose to be)

#### BeAnInstanceOf
```
$this->some_method_or_variable->shouldBeAnInstanceOf('object');
$this->some_method_or_variable->shouldNotBeAnInstanceOf('object');
```
#### ReturnAnInstanceOf
```
$this->some_method_or_variable->shouldReturnAnInstanceOf('object');
$this->some_method_or_variable->shouldNotReturnAnInstanceOf('object');
```
#### HaveType
```
$this->some_method_or_variable->shouldHaveType('object');
$this->some_method_or_variable->shouldNotHaveType('object');
```

#### Object State (Checks if object is_something method's return value)
```
$this->some_method_or_variable->shouldHave('something');
$this->some_method_or_variable->shouldNotHave('something');
```

### Creating Prophet Objects (requires you to add 'use PHPSpec2\Specification;')

#### Checking to Stub Collaborators (Let's you just test the class at hand)

`$this->some_required_method_from_another_class->willReturn("nothing");`

#### Checking to Mock Behavior (Let's you pretend that something is happening)
`$this->some_required_method_from_another_class->shouldBeCalled();`

#### Checking for Let & Let Go (I'll explain this one in person and annotate later)
