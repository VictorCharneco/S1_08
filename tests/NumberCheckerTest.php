<?php

use PHPUnit\Framework\TestCase;
use App\NumberChecker;

class NumberCheckerTest extends TestCase{

    public function testParell_Parell(){
        $num = new NumberChecker(2);
        $this->assertTrue($num->isEven());
    }


    public function testParell_Impar(){
        $num = new NumberChecker(3);
        $this->assertFalse($num->isEven());
    }
}

?>





