<?php

declare(strict_types=1);

namespace Tests\Max;

use Excercise\Max\Max;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

class MaxTest extends TestCase
{

    private Max $underTest;

    public function setUp(): void
    {
        $this->underTest = new Max();
    }
    /**
     * @test
     * */
    public function itShouldFindPositiveMaximumFromArray(): void
    {
        $actual = $this->underTest->find([1, 2, 3]);
        $this->assertEquals(3, $actual);
    }
    /**
     * @test
     * */
    public function itShouldFindNegativeMaximumFromArray(): void
    {
        $actual = $this->underTest->find([-1, -2, -3]);
        $this->assertEquals(-1, $actual);
    }

    /**
     * @test
     * */
    public function itShouldThrowExceptionIfNonNumericElementsProvided(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->underTest->find([1,2, 'a']);
    }

    /**
     * @test
     * */
    public function itShouldThrowExceptionIfNoElementsProvided(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->underTest->find([]);
    }

}
