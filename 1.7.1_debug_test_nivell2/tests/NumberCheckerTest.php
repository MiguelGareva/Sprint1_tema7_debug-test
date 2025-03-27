<?php

namespace Miguel\tests;

use PHPUnit\Framework\TestCase;
use Miguel\Ex1Lvl1\NumberChecker;

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
    public function testIsEven(){
        $numberChecker1 = new NumberChecker(3);

        $this->assertEquals(false, $numberChecker1->isEven());

        $numberChecker2 = new NumberChecker(2);

        $this->assertEquals(true, $numberChecker2->isEven());


    }

    public function testIsPositive(){
        $numberChecker = new NumberChecker(-2);

        $this->assertEquals(false, $numberChecker->isPositive());

        $numberChecker2 = new NumberChecker(5);

        $this->assertEquals(true, $numberChecker2->isPositive());
    }
}
?>