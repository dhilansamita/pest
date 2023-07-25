<?php

use PHPUnit\Framework\TestCase;
/*
it('adds two numbers correctly', function () {
    // Assuming the add() function is defined and accessible here
    $result = add(5, 3);
    expect($result)->toBe(8);
});

it('checks if a variable is an array', function () {
    // Arrange
    $array = [1, 2, 3];

    // Assert
    expect($array)->toBeArray();
});

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

it('tests truthiness of values', function () {
    $isTrue = true;
    $isFalse = false;
    $notEmptyArray = [1, 2, 3];
    $notEmptyString = "Hello, world!";
    $zeroValue = 0;
    $nullValue = null;

    expect($isTrue)->toBeTruthy();
    expect($isFalse)->not->toBeTruthy();
    expect($notEmptyArray)->toBeTruthy();
    expect($notEmptyString)->toBeTruthy();
    expect($zeroValue)->toBeTruthy();
    expect($nullValue)->not->toBeTruthy();
});

it('tests falsiness of values', function () {
    $isTrue = true;
    $isFalse = false;
    $notEmptyArray = [1, 2, 3];
    $notEmptyString = "Hello, world!";
    $zeroValue = 0;
    $nullValue = null;

    expect($isTrue)->not->toBeFalse();
    expect($isFalse)->toBeFalse();
    expect($notEmptyArray)->not->toBeFalse();
    expect($notEmptyString)->not->toBeFalse();
    expect($zeroValue)->not->toBeFalse();
    expect($nullValue)->toBeFalse();
});

it('tests falsiness of values', function () {
    $isTrue = true;
    $isFalse = false;
    $notEmptyArray = [1, 2, 3];
    $notEmptyString = "Hello, world!";
    $zeroValue = 0;
    $nullValue = null;

    expect($isTrue)->not->toBeFalsy();
    expect($isFalse)->toBeFalsy();
    expect($notEmptyArray)->not->toBeFalsy();
    expect($notEmptyString)->not->toBeFalsy();
    expect($zeroValue)->not->toBeFalsy();
    expect($nullValue)->toBeFalsy();
});

it('tests if a value is greater than another value', function () {
    $greaterValue = 10;
    $smallerValue = 5;

    expect($greaterValue)->toBeGreaterThan($smallerValue);
});

it('tests if a value is greater than or equal to another value', function () {
    $greaterValue = 10;
    $smallerValue = 5;
    $equalToValue = 10;

    expect($greaterValue)->toBeGreaterThanOrEqual($smallerValue);
    expect($equalToValue)->toBeGreaterThanOrEqual($greaterValue);
});

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

class ExampleClass
{
}

it('tests if an array contains only instances of a specific class', function () {
    $array = [new ExampleClass(), new ExampleClass()];

    expect($array)->toContainOnlyInstancesOf(ExampleClass::class);
});
*/

/*
it('tests the count of elements in an array', function () {
    $array = [1, 2, 3, 4, 5];

    expect($array)->toHaveCount(5);
});

it('tests the count of elements in a collection', function () {
    $collection = collect([1, 2, 3, 4, 5]);

    expect($collection)->toHaveCount(5);
});

class ExampleClass
{
    public function exampleMethod()
    {
        return 'Hello, world!';
    }
}

it('tests if a class has a specific method', function () {
    $exampleObject = new ExampleClass();

    expect($exampleObject)->toHaveMethod('exampleMethod');
});

class ExampleClass
{
    public function methodOne()
    {
        // Method One implementation
    }

    public function methodTwo()
    {
        // Method Two implementation
    }
}

it('tests if a class has specific methods', function () {
    $exampleObject = new ExampleClass();

    // Use PHPUnit's assertClassHasMethods() method within Pest
    $this->assertClassHasMethods(['methodOne', 'methodTwo'], ExampleClass::class);
});
/*
class ExampleClass
{
    public $exampleProperty = 'Hello, world!';
}

it('tests if a class has a specific property', function () {
    $exampleObject = new ExampleClass();

    // Use PHPUnit's assertClassHasAttribute() method within Pest
    $this->assertClassHasAttribute('exampleProperty', ExampleClass::class);
});


class ExampleClass
{
    public $propertyOne = 'Value One';
    public $propertyTwo = 'Value Two';
}

it('tests if a class has specific properties', function () {
    $exampleObject = new ExampleClass();

    // Use PHPUnit's assertClassHasAttributes() method within Pest
    $this->assertClassHasAttributes(['propertyOne', 'propertyTwo'], ExampleClass::class);
});

it('tests if an array matches another array', function () {
    $originalArray = ['name' => 'John Doe', 'age' => 30, 'city' => 'New York'];

    $expectedSubset = ['name' => 'John Doe'];

    // Use PHPUnit's assertArraySubset() method within Pest
    $this->assertArraySubset($expectedSubset, $originalArray);
});

class ExampleClass
{
    public $name = 'John Doe';
    public $age = 30;
    public $city = 'New York';
}

it('tests if an object matches the expected attributes', function () {
    $originalObject = new ExampleClass();

    $expectedAttributes = ['name', 'age'];

    // Use PHPUnit's assertObjectHasAttribute() method within Pest
    foreach ($expectedAttributes as $attribute) {
        $this->assertObjectHasAttribute($attribute, $originalObject);
    }
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

it('tests if a value is iterable', function () {
    $arrayValue = [1, 2, 3];
    $stringValue = "Hello, world!";
    $intValue = 42;

    expect($arrayValue)->toBeIterable();
    expect($stringValue)->not->toBeIterable();
    expect($intValue)->not->toBeIterable();
});

it('tests if a value is numeric', function () {
    $intValue = 42;
    $floatValue = 3.14;
    $stringValue = "Hello, world!";

    expect($intValue)->toBeNumeric();
    expect($floatValue)->toBeNumeric();
    expect($stringValue)->not->toBeNumeric();
});

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

it('tests if a string is valid JSON', function () {
    $jsonString = '{"name": "John", "age": 30, "city": "New York"}';
    $nonJsonString = 'Hello, world!';

    expect($jsonString)->assertJson();
    expect($nonJsonString)->not->assertJson();
});

it('tests if a value is NaN', function () {
    $nanValue = acos(8);
    $nonNanValue = 42;

    expect($nanValue)->assertNan();
    expect($nonNanValue)->not->assertNan();
});

it('tests if a value is null', function () {
    $nullValue = null;
    $nonNullValue = "Hello, world!";

    expect($nullValue)->toBeNull();
    expect($nonNullValue)->not->toBeNull();
});
*/