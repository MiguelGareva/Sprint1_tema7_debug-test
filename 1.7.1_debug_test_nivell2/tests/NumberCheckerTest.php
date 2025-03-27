<?php

namespace Miguel\tests;

use PHPUnit\Framework\TestCase;
use Miguel\Ex1Lvl1\NumberChecker;
use PHPUnit\Framework\Attributes\DataProvider;

class NumberCheckerTest extends TestCase{

    public static function evenNumberProvider(): array{
        return [
            'cero es par' => [0],
            'numero par positivo' => [2],
            'numero par negativo' => [-4]
        ];
    }

    public static function oddNumberProvider(): array{
        return [
            'numero impar positivo' => [3],
            'numero impar negativo' => [-5]
        ];
    }

    public static function positiveNumberProvider(): array{
        return [
            'numero par positivo' => [4],
            'numero impar positivo' => [7]
        ];
    }

    public static function negativeNumberProvider(): array{
        return [
            'numero par negativo' => [-6],
            'numero impar negativo' => [-9]
        ];
    }
    #[DataProvider('evenNumberProvider')]
    public function testIsEven($number){
        
        $numberChecker = new NumberChecker($number);
        $this->assertTrue(($numberChecker->isEven()));
    }
    #[DataProvider('oddNumberProvider')]
    public function testIsOdd($number){
        $numberChecker = new Numberchecker($number);
        $this->assertFalse(($numberChecker->isEven()));
    }

    public function testIsPositive(){
        $numberChecker = new NumberChecker(-2);

        $this->assertEquals(false, $numberChecker->isPositive());

        $numberChecker2 = new NumberChecker(5);

        $this->assertEquals(true, $numberChecker2->isPositive());
    }
}
?>