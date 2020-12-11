<?php

declare(strict_types=1);

namespace Tests\FizzBuzz;

use Excercise\FizzBuzz\FizzBuzz;
use PHPUnit\Framework\TestCase;

class FizzBuzzTest extends TestCase
{

    /**
     * @test
     **/
    public function itShouldPrintValues(): void
    {
        $underTest = new FizzBuzz();
        $this->expectOutputString("12fizz4buzzfizz78fizzbuzz11fizz1314fizzbuzz");
        $underTest->print(15);
    }
}
