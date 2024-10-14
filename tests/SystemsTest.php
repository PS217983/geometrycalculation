<?php
use PHPUnit\Framework\TestCase;
use teunv\GeometricCalculator\Systems;

class SystemsTest extends TestCase
{
    public function testSystems() {
        $systems = new Systems;
        $this->assertEqualsWithDelta(0.005, $systems->CalculateUnits("dm", "hm", 5), 0.00001); 
        $this->assertEqualsWithDelta(13123.3595800525, $systems->CalculateUnits("km", "yd", 12), 0.00001);
        $this->assertEqualsWithDelta(0.0789141414, $systems->CalculateUnits("in", "mi", 8000), 0.00000001);
       }
}