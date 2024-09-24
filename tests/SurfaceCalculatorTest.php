<?php
use PHPUnit\Framework\TestCase;
use teunv\GeometricCalculator\SurfaceCalculator;

class SurfaceCalculatorTest extends TestCase
{
    public function testRectangle()
    {
        $surfaceCalculator = new SurfaceCalculator;
        $this->assertEquals(25, $surfaceCalculator->CalculateRectangleSurface(5, 5));
    }

    public function testTriangle()
    {
        $surfaceCalculator = new SurfaceCalculator;
        $this->assertEquals(12.5, $surfaceCalculator->calculateTriangleSurface(5, 5));
    }

    public function testCircle()
    {
        $surfaceCalculator = new SurfaceCalculator;
        $this->assertEqualsWithDelta(78.5398163397, $surfaceCalculator->calculateCirlceSurface(5), 0.0000001);
    }

    public function testHexagon()
    {
        $surfaceCalculator = new SurfaceCalculator;
        $this->assertEquals(64.9519052838329, $surfaceCalculator->calculateHexagonSurface(5));
    }
}