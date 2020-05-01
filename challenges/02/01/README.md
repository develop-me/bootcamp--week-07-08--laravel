# Challenges

---

## Test Driven Development (Chapter 6)

When practising TDD we often use "katas": well known exercises that you can repeat over time and see how your code changes.

We'll look at using TDD for building our app tomorrow.

### Rules

- Add each test, one-by-one
- Run the test *before* you starting the code (red)
- Get the test to pass (green)
- **Do not move on to the next test until you get green for *all* your current tests**


### Adder

Create a new class `App\Adder` and add an *empty* `add` method.

Create a new test `AdderTest` and add the following `setUp()` method:

```php
public function setUp() : void
{
    $this->adder = new Adder();
}
```

**Do not add the next test until you are at green**. Don't even *look* at the next test if you can help it.

Run your tests with:

```php
    vendor/bin/phpunit --filter Adder
```

You don't need to know what the method's really doing (although you can probably guess). Just get each test working:

1) Only get this test to pass - don't jump ahead:

```php
public function testOnePlus0()
{
    $this->assertSame(1, $this->adder->add(1, 0));
}
```

2)

```php
public function testOnePlusOne()
{
    $this->assertSame(2, $this->adder->add(1, 1));
}
```

3)

```php
public function testTenPlus5()
{
    $this->assertSame(15, $this->adder->add(10, 5));
}
```

4) Hopefully not necessary, but refactor if you need to!


### FizzBuzz

Create a new class `App\FizzBuzz` and add an *empty* `forNumber` method.

Create a new test `FizzBuzzTest` and add the following `setUp()` method:

```php
public function setUp() : void
{
    $this->fizzbuzz = new FizzBuzz();
}
```


**Do not add the next test until you are at green**. Don't even *look* at the next test if you can help it.

Run your tests with:

```php
    vendor/bin/phpunit --filter FizzBuzz
```

Remember:

- Write the simplest code that you can to get each test to work.
- **Refactor** is part of the "Red, Green, Refactor" loop. If your code starts getting ungainly once you've got a green, stop and refactor before adding another test.

1)

```php
public function test1()
{
    $this->assertSame("1", $this->fizzbuzz->forNumber(1));
}
```

2)

```php
public function test1()
{
    $this->assertSame("2", $this->fizzbuzz->forNumber(2));
}
```

3)

```php
public function test3()
{
    $this->assertSame("Fizz", $this->fizzbuzz->forNumber(3));
}
```

**Hint**: Don't do more than is necessary to get this one working:


4)

```php
public function test4()
{
    $this->assertSame("4", $this->fizzbuzz->forNumber(4));
}
```

5)

```php
public function test5()
{
    $this->assertSame("Buzz", $this->fizzbuzz->forNumber(5));
}
```

6)

```php
public function test6()
{
    $this->assertSame("Fizz", $this->fizzbuzz->forNumber(6));
}
```

**Hint**: Don't be tempted to get anything other than `6` working.

7)

```php
public function test7()
{
    $this->assertSame("7", $this->fizzbuzz->forNumber(7));
}
```

8) Probably safe to skip a few...

```php
public function test10()
{
    $this->assertSame("Buzz", $this->fizzbuzz->forNumber(10));
}
```

9)

```php
public function test15()
{
    $this->assertSame("FizzBuzz", $this->fizzbuzz->forNumber(15));
}
```

10) Write a few tests of your own for numbers between 15 and 100. Hopefully they'll all go green straight away.

11) Now for any numbers divisible by 7, `Rarr` should get added to the mix:

    ```
    7: Rarr
    21: FizzRarr
    35: BuzzRarr
    105: FizzBuzzRarr
    ```

    Write some appropriate tests, one at a time, getting it to work for each one.

12) If you've got more than one conditional then think about refactoring!

### Code Cracker

Given an alphabet decryption key like the one below, create a program that can crack any message using the decryption key.

Alphabet:

```
a b c d e f g h i j k l m n o p q r s t u v w x y z
```

Decryption Key:

```
! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o
```

Your *final* test should look like this:

```php
public function testFull()
{
    $cracker = new Cracker("! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o");
    $this->assertSame("hello mum", $cracker->decrypt("&£aad bjb"));
}
```

You'll need to write your own tests for this. Remember, start really simple. So don't go straight in writing the `decrypt` method. Build up to it in small steps.

### Tricksy

Pick a [kata](http://codingdojo.org/kata/) (but not FizzBuzz or Code Cracker!)

Remember, write each test in turn. Don't write a new test until you've got your current test passing. And never get ahead of yourself. Only write code to pass the tests. Write more tests if you want to change what the code does.
