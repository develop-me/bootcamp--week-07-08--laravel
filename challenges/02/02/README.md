# Challenges

---

## Test Driven Development (Chapter 6)

When practising TDD we often use "katas": well known exercises (like FizzBuzz) that you can repeat over time and see how your code changes.

We'll look at using TDD for building our app tomorrow.

### Rules

- Add each test, one-by-one
- Run the test *before* you starting the code (red)
- Get the test to pass (green)
- **Do not move on to the next test until you get green for *all* your current tests**


### Adder

Create a new class `App\Adder` and add an *empty* `add` method.

Create a new test `AdderTest` and add the following `__construct()` method:

```php
public function __construct()
{
    parent::__construct();
    $this->adder = new Adder();
}
```

**Do not add the next test until you are at green**. Don't even *look* at the next test if you can help it.

You don't need to know what the method's really doing (although you can probably guess). Just get each test working:

1) Only get this test to pass - don't jump ahead:

```php
public function testOnePlus0()
{
    $this->assertSame(1, $this->adder>add(1, 0));
}
```

2)

```php
public function testOnePlusOne()
{
    $this->assertSame(2, $this->adder>add(1, 1));
}
```

3)

```php
public function testTenPlus5()
{
    $this->assertSame(15, $this->adder>add(10, 5));
}
```

4) Hopefully not necessary, but refactor if you need to!


### Roman Numerals

Create a new class `App\RomanNumerals` and add an *empty* `toNumeral` method.

Create a new test `RomanNumeralsTest` and add the following `__construct()` method:

```php
public function __construct()
{
    parent::__construct();
    $this->rn = new RomanNumerals();
}
```


**Do not add the next test until you are at green**. Don't even *look* at the next test if you can help it.

You don't need to know Roman numerals to get this working, just do it one test at a time.

1)

```php
public function test1()
{
    $this->assertSame("I", $this->rn->toNumeral(1));
}
```

2)

```php
public function test2()
{
    $this->assertSame("II", $this->rn->toNumeral(2));
}
```

3)

```php
public function test3()
{
    $this->assertSame("III", $this->rn->toNumeral(3));
}
```

4)

```php
public function test4()
{
    $this->assertSame("IV", $this->rn->toNumeral(4));
}
```

5)

```php
public function test5()
{
    $this->assertSame("V", $this->rn->toNumeral(5));
}
```

6)

```php
public function test6()
{
    $this->assertSame("VI", $this->rn->toNumeral(6));
}
```

7)

```php
public function test7()
{
    $this->assertSame("VII", $this->rn->toNumeral(7));
}
```

8)

```php
public function test8()
{
    $this->assertSame("VIII", $this->rn->toNumeral(8));
}
```

9)

```php
public function test9()
{
    $this->assertSame("IX", $this->rn->toNumeral(9));
}
```

10)

```php
public function test10()
{
    $this->assertSame("X", $this->rn->toNumeral(10));
}
```

11)

```php
public function test20()
{
    $this->assertSame("XX", $this->rn->toNumeral(20));
}
```

12)

```php
public function test40()
{
    $this->assertSame("XL", $this->rn->toNumeral(40));
}
```

13)

```php
public function test49()
{
    $this->assertSame("XLIX", $this->rn->toNumeral(49));
}
```

14)

```php
public function test50()
{
    $this->assertSame("L", $this->rn->toNumeral(50));
}
```

15)

```php
public function test99()
{
    $this->assertSame("XCIX", $this->rn->toNumeral(99));
}
```

16)

```php
public function test100()
{
    $this->assertSame("C", $this->rn->toNumeral(100));
}
```

17)

```php
public function test500()
{
    $this->assertSame("D", $this->rn->toNumeral(500));
}
```

18)

```php
public function test1000()
{
    $this->assertSame("M", $this->rn->toNumeral(1000));
}
```

19)

```php
public function test3394()
{
    $this->assertSame("MMMCMXCIV", $this->rn->toNumeral(3994));
}
```

20) If you've got 19 conditionals, now is the time to refactor!


### Tricksy

Pick a [kata](http://codingdojo.org/kata/).

Remember, write each test in turn. Don't write a new test until you've got your current test passing. And never get ahead of yourself. Only write code to pass the tests. Write more tests if you want to change what the code does.
