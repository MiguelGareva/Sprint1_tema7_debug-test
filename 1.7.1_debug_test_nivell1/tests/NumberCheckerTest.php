<?php

namespace Miguel\Tests;

use PHPUnit\Framework\TestCase;
use Miguel\Ex1Lvl1\NumberChecker;

class NumberCheckerTest extends TestCase{

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