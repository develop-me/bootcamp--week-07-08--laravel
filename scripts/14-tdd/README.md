# Day 3

## TDD

- Write our tests *first*
- Write failing test first, then write code to make it work. Then write next test.
- Red, Green, Refactor
    - Red: write the test - what does it need to do?
    - Green: smallest bit of code to get it working - how are we going to do it?
    - Refactor: tidy up code
- Refactoring: changing the code without changing what it does
- Errors are red, but we want to get a *failure* before aiming for green
- If we're doing it properly, should never write a new line of code without first having a test for it
- Guarantees that if we make changes and all the tests pass it definitely still does what we think
- Freedom to make changes without worrying about breaking things
- If you find a bug, add a new test

### Roman Numerals

- new `App\RomanNumeral` class

- `aritsan make:test RomanNumeralTest --unit` then update:

    ```php
    namespace Tests\Unit;

    use PHPUnit\Framework\TestCase;
    use App\RomanNumeral;

    class RomanNumeralTest extends TestCase
    {
        private $rn;

        public function setUp() : void
        {
            parent::setUp();
            $this->rn = new RomanNumeral();
        }
    }
    ```

- Add first test `test1`

    ```php
    public function test1()
    {
        $this->assertSame("I", $this->rn->forNumber(1));
    }
    ```
- **RUN TESTS AT EVERY STAGE**
- Run test: red **error** - method doesn't exist
- Add empty `forNumber` method to `RomanNumeral`
- Run test: red **failure** - ready to go
- Get to green:
    - Don't accept a parameter
    - Just return `I`
    - Add `string` return type
    - *smallest* bit of code to get it working
- *Run tests*
- Might seem silly, but it's all that was necessary to pass the test. If we want more functionality we need more tests
- Add `test2()` for `2` - run tests, fix, run tests
    - Accept the value passed (add `int` type)
    - Just return `II` if `2`
    - No obvious refactoring
- Add `test3()` for `3` - run tests, fix, run tests
    - Just return `III` if `3`
- **Refactor** using `str_repeat("I", $n)`
- Add `test4` for `4` - run tests, fix, run tests
    - Back to an `if` statement
- Add `test5` for `5` - run tests, fix, run tests
    - Another `if` statement
- Too many `if`s. Could use a `switch` statements. Or can **refactor** using a dictionary:

    ```php
    private $dictionary = [
        5 => "V",
        4 => "IV",
    ];
    ```

    ```php
    foreach ($this->dictionary as $value => $numeral) {
        if ($number === $value) {
            return $numeral;
        }
    }
    ```

    Order is important!

- Add `test6` for `6` - run tests, fix, run tests
    - Just add to dictionary for now
- Add `test7` for `7` - run tests, fix, run tests
    - Add to dictionary again
- Looks like there's a pattern: 6 and 7 are just 5 + 1 and 5 + 2
- But let's keep going, two might just be a coincidence
- Add `test8` for `8` - run tests, fix, run tests
    - Add to dictionary again
- **Refactor**: *definitely* a pattern now: 8 is 5 + 3
    - Rather than returning in dictionary loop, build up string and subtract the value
    - Then concatenate with `str_repeat` at end

    ```php
    $result = "";

    foreach ($this->dictionary as $value => $numeral) {
        if ($number >= $value) {
            $result .= $numeral;
            $number -= $value;
        }
    }

    // otherwise just do as before
    return $result . str_repeat("I", $number);
    ```

- Add `test9` for `9` - run tests, fix, run tests
    - That's not part of the pattern, so `IX` into the dictionary
- Add `test10` for `10` - run tests, fix, run tests
    - Also not part of the pattern, so `X` into the dictionary
- Add `test11` for `11` - run tests
    - Should work for free!
- All the way up to `test19` should work
- Add `test20` for `20` - run tests, fix, run tests
    - Add `XX` into the dictionary
- Add `test30` for `30` - run tests, fix, run tests
    - Add `XXX` into the dictionary
- **Refactor**: use a `while` instead of an `if` to repeat `X`s:

    ```php
        foreach ($this->dictionary as $value => $numeral) {
            // while instead of if
            while ($number >= $value) {
                $result .= $numeral;
                $number -= $value;
            }
        }
    ```

- **Refactor again!**: if we add `I` to the dictionary we don't need the `str_repeat` at the end, just return `$result`!
- Add `test40` for `40` - run tests, fix, run tests
    - Need to add `XL` to dictionary
- Add `test49` for `49` - run tests
    - Works for free
- Add `test50` for `50` - run tests, fix, run tests
    - Need to add `L` to dictionary
- Add `test90` for `90` - run tests, fix, run tests
    - Need to add `XC` to dictionary
- Add `test100` for `100` - run tests, fix, run tests
    - Need to add `C` to dictionary
- Add `test400` for `400` - run tests, fix, run tests
    - Need to add `CD` to dictionary
- Add `test500` for `500` - run tests, fix, run tests
    - Need to add `D` to dictionary
- Add `test900` for `900` - run tests, fix, run tests
    - Need to add `CM` to dictionary
- Add `test1000` for `1000` - run tests, fix, run tests
    - Need to add `M` to dictionary
- Add `test3994` for `3994` - run tests
    - Should work and give the corect answer of MMMCMXCIV
- Ask students to pick a number to test between 5000 and 10000
    - Add a test
    - Show it works!

- Go over why we used TDD
    - Wouldn't know where to start if just asked to solve in one go
    - We know our code works!
    - We can change it without worrying about it
    - If we later find an issue, we can add more tests

### Git Hooks

- Hooks let us intercept bit of life-cycle
- Live in `.git/hooks` - not part of the repo
- `pre-commit`: Non-zero exit code won't let us commit
- Create `pre-commit` hook

    ```bash
    #!/bin/bash

    vendor/bin/phpunit --testsuite Unit
    ```

- `chmod +x .git/hooks/pre-commit`
- Mention `git bisect`
