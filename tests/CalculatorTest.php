<?php
    use PHPUnit\Framework\TestCase;
 
    class CalculatorTest extends TestCase {
 
        public function testIsSumCorrect(){
            $calc = new Calculator();
            $result = $calc->sum(1,2.5);
            $expected = 3.5;
            $this->assertSame($expected,$result);       
        }
 
    }
