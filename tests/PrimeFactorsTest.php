<?php

use App\PrimeFactors;
use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\TestDox;

class PrimeFactorsTest extends TestCase
{
    public static function factors(): array
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [8, [2, 2, 2]],
        ];
    }
    #[DataProvider('factors')]
    #[TestDox('It does something')]
    public function test_it_generates_prime_factors($number, $expected): void
    {
        $factors = new PrimeFactors;
        $this->assertEquals($expected, $factors->generate($number));
    }
}
