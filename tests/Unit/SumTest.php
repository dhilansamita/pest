<?php

use PHPUnit\Framework\TestCase;
/*
it('tests if two values are ToBe', function () {
    $valueOne = 10;
    $valueTwo = 10;

    expect($valueOne)->toBe($valueTwo);
});



it('checks if a variable is an array', function () {
    // Arrange
    $array = [1, 2, 3];

    // Assert
    expect($array)->toBeArray();
});
*/


/*
it('tests if an array is empty', function () {
    $emptyArray = [];
    $nonEmptyArray = [1, 2, 3];

    expect($emptyArray)->toBeEmpty();
    expect($nonEmptyArray)->not->toBeEmpty();
});


it('tests if a condition is true', function () {
    $isTrue = true;
    $isFalse = false;

    expect($isTrue)->toBeTrue();
    expect($isFalse)->not->toBeTrue();
});



it('tests if a value is truthy', function () {
    $truthyValue = true;
    $intValue = 42;
    $stringValue = "Hello, world!";
    $arrayValue = [1, 2, 3];

    expect($truthyValue)->toBeTruthy();
    expect($intValue)->toBeTruthy();
    expect($stringValue)->toBeTruthy();
    expect($arrayValue)->toBeTruthy();
});


it('tests if a value is false', function () {
    $falseValue = false;
    $trueValue = true;

    expect($falseValue)->toBeFalse();
    expect($trueValue)->not->toBeFalse();
});
*/


/*
it('tests if a value is falsy', function () {
    $falseValue = false;
    $nullValue = null;
    $zeroValue = 0;
    $emptyString = '';
    $emptyArray = [];

    expect($falseValue)->toBeFalsy();
    expect($nullValue)->toBeFalsy();
    expect($zeroValue)->toBeFalsy();
    expect($emptyString)->toBeFalsy();
    expect($emptyArray)->toBeFalsy();
});


it('tests if a value is greater than another value', function () {
    $greaterValue = 10;
    $smallerValue = 5;

    expect($greaterValue)->toBeGreaterThan($smallerValue);
});
*/


/*
it('tests if a value is greater than or equal to another value', function () {
    $greaterValue = 10;
    $smallerValue = 5;
    $equalToValue = 10;

    expect($greaterValue)->toBeGreaterThanOrEqual($smallerValue);
    expect($equalToValue)->toBeGreaterThanOrEqual($greaterValue);
});
*/

/*
it('tests if a value is less than another value', function () {
    $smallerValue = 5;
    $greaterValue = 10;

    expect($smallerValue)->toBeLessThan($greaterValue);
});


it('tests if a value is less than or equal to another value', function () {
    $smallerValue = 5;
    $greaterValue = 10;
    $equalToValue = 5;

    expect($smallerValue)->toBeLessThanOrEqual($greaterValue);
    expect($equalToValue)->toBeLessThanOrEqual($smallerValue);
});



it('tests if an array contains a specific element', function () {
    $array = [1, 2, 3, 4, 5];

    expect($array)->toContain(3);
    expect($array)->not->toContain(6);
});


it('checks if an array contains only instances of a specific class using expect and assertContainsOnlyInstancesOf()', function () {
    $array = [new ExampleClass(), new ExampleClass()];

    expect($array)->toContainOnlyInstancesOf(ExampleClass::class);
});




/*

it('tests the count of elements in an array', function () {
    $array = [1, 2, 3, 4, 5];

    expect($array)->toHaveCount(5);
});

it('tests the count of elements in a collection', function () {
    $collection = collect([1, 2, 3, 4, 5]);

    expect($collection)->toHaveCount(5);
});
/*



/*
// app/Calculator.php
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}
// tests/CalculatorTest.php


it('has an add tohavemethod', function () {
    // Assert
    expect(method_exists(Calculator::class, 'add'))->toBeTrue();
});


*/

/*
// app/Calculator.php
class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function subtract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
}
// tests/CalculatorTest.php

it('has required methods', function () {
    $requiredMethods = ['add', 'subtract', 'multiply'];
    $class = new ReflectionClass(Calculator::class);

    // Assert
    foreach ($requiredMethods as $method) {
        expect($class->hasMethod($method))->toBeTrue();
    }
});

*/
// app/Person.php

/*
class Person
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
}
// tests/Unit/PersonTest.php

test('Person class has name and age property', function () {
    $person = new Person('John Doe', 30);

    // Assert that the $person object has the "name" property
    expect($person)->toHaveProperty('name');

    // Assert that the $person object has the "age" property
    expect($person)->toHaveProperty('age');
});
*/
/*
class ExampleClass
{
    public $foo;
    private $bar;
    public $baz;
}


it('should check if an object has multiple properties using toHaveProperties', function () {
    $instance = new ExampleClass();
    $instance->foo = 'value';
    $instance->baz = 'another value';

    expect($instance)->toHaveProperties(['foo', 'baz']);
    expect($instance)->not->toHaveProperties(['bar', 'qux']);
})->uses(TestCase::class);



// app/User.php
/*
function getUserData()
{
    return [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'age' => 30,
    ];
}
// tests/Unit/UserTest.php

test('getUserData() returns the expected user data array', function () {
    $expectedData = [
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'age' => 30,
    ];

    $userData = getUserData();

    // Assert that the $userData array matches the $expectedData array
    expect($userData)->toMatchArray($expectedData);
});

/*
// app/Person.php

class Person
{
    public $name;
    public $email;
    public $age;

    public function __construct($name, $email, $age)
    {
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }
}
// tests/Unit/PersonTest.php

test('Person object matches the expected person object', function () {
    $expectedPerson = new Person('John Doe', 'john@example.com', 30);

    $person = new Person('John Doe', 'john@example.com', 30);

    // Assert that the $person object matches the $expectedPerson object
    expect($person)->toMatchObject($expectedPerson);
});

/*
it('tests if two values are equal', function () {
    $valueOne = 10;
    $valueTwo = 10;
    $stringValue = "Hello, world!";

    expect($valueOne)->toEqual($valueTwo);
    expect($stringValue)->toEqual("Hello, world!");
});

it('tests if a value is a boolean', function () {
    $trueValue = true;
    $falseValue = false;
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($trueValue)->toBeBool();
    expect($falseValue)->toBeBool();
    expect($stringValue)->not->toBeBool();
    expect($intValue)->not->toBeBool();
});

function exampleFunction()
{
    return 'Hello, world!';
}

class ExampleClass
{
    public function exampleMethod()
    {
        return 'Hello, world!';
    }
}

it('tests if a value is callable', function () {
    $callableFunction = 'exampleFunction';
    $callableMethod = [new ExampleClass(), 'exampleMethod'];
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($callableFunction)->toBeCallable();
    expect($callableMethod)->toBeCallable();
    expect($stringValue)->not->toBeCallable();
    expect($intValue)->not->toBeCallable();
});

it('tests if a file exists', function () {
    $filePath = public_path('example.txt');

    // Use PHPUnit's assertFileExists() method within Pest
    $this->assertFileExists($filePath);
});
/*
it('tests if a value is a float', function () {
    $floatValue = 3.14;
    $intValue = 42;
    $stringValue = "Hello, world!";

    expect($floatValue)->toBeFloat();
    expect($intValue)->not->toBeFloat();
    expect($stringValue)->not->toBeFloat();
});

it('tests if a value is an integer', function () {
    $intValue = 42;
    $floatValue = 3.14;
    $stringValue = "Hello, world!";

    expect($intValue)->toBeInt();
    expect($floatValue)->not->toBeInt();
    expect($stringValue)->not->toBeInt();
});
/*
it('tests if a value is iterable', function () {
    $arrayValue = [1, 2, 3];
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($arrayValue)->toBeIterable();
    expect($stringValue)->not->toBeIterable();
    expect($intValue)->not->toBeIterable();
});
/*
it('tests if a value is numeric', function () {
    $intValue = 42;
    $floatValue = 3.14;
    $stringValue = "Hello, world!";

    expect($intValue)->toBeNumeric();
    expect($floatValue)->toBeNumeric();
    expect($stringValue)->not->toBeNumeric();
});

/*
class ExampleClass
{
    // ExampleClass definition
}

it('tests if a value is an object', function () {
    $objectValue = new ExampleClass();
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($objectValue)->toBeObject();
    expect($stringValue)->not->toBeObject();
    expect($intValue)->not->toBeObject();
});
/*
it('tests if a value is a resource', function () {
    $fileHandle = fopen('example.txt', 'r');
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($fileHandle)->toBeResource();
    expect($stringValue)->not->toBeResource();
    expect($intValue)->not->toBeResource();

    fclose($fileHandle);
});

it('tests if a value is scalar', function () {
    $intValue = 42;
    $floatValue = 3.14;
    $stringValue = "Hello, world!";
    $boolValue = true;
    $arrayValue = [1, 2, 3];

    expect($intValue)->toBeScalar();
    expect($floatValue)->toBeScalar();
    expect($stringValue)->toBeScalar();
    expect($boolValue)->toBeScalar();
    expect($arrayValue)->not->toBeScalar();
});

it('tests if a value is a string', function () {
    $stringValue = "Hello, world!";
    $intValue = 42;
    $floatValue = 3.14;
    $arrayValue = [1, 2, 3];

    expect($stringValue)->toBeString();
    expect($intValue)->not->toBeString();
    expect($floatValue)->not->toBeString();
    expect($arrayValue)->not->toBeString();
});
it('checks if a value is a valid JSON string using expect and assertJson()', function () {
    
    $jsonString = '{"name": "John", "age": 30}';

    expect($jsonString)->toBeJson();
});

it('checks if a value is NaN using expect and assertNan()', function () {
    $nanValue = acos(8); // acos function returns NaN for input greater than 1

    expect($nanValue)->toBeNan();
});

it('tests if a value is null', function () {
    $nullValue = null;
    $nonNullValue = "Hello, world!";

    expect($nullValue)->toBeNull();
    expect($nonNullValue)->not->toBeNull();
});
*/