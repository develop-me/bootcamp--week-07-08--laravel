# Challenges

---

## Test Driven Development (Chapter 6)

When practising TDD we often use "katas": well known exercises (like FizzBuzz) that you can repeat over time and see how your code changes.

### Rules

- Add each test, one-by-one
- Run the test *before* you starting the code (red)
- Get the test to pass (green)
- **Do not move on to the next test until you get green for *all* your current tests**


### Roman Numerals

Create a new class `App\RomanNumerals` and add an *empty* `toNumeral` method.

Add the following `__construct()` method:

```php
public function __construct()
{
    parent::__construct();
    $this->rn = new RomanNumerals();
}
```

Create a new test `RomanNumeralsTest`.

**Do not add the next test until you are at green**.

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
