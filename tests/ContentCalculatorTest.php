<?php
use PHPUnit\Framework\TestCase;
use teunv\GeometricCalculator\ContentCalculator;
use teunv\GeometricCalculator\SurfaceCalculator;

class ContentCalculatorTest extends TestCase
{
    public function testSphere()
    {
        $contentCalculator = new ContentCalculator;
        $this->assertEqualsWithDelta(523.5987755983, $contentCalculator->CalculateSphereContent(5), 0.0000001);
    }

    public function testPrism()
    {
        $contentCalculator = new ContentCalculator;
        $surfaceCalculator = new SurfaceCalculator;

        $rectangle = $surfaceCalculator->CalculateRectangleSurface(5, 5);
        $triangle = $surfaceCalculator->calculateTriangleSurface(5, 5);
        $circle = round($surfaceCalculator->calculateCirlceSurface(5), 10);
        $hexagon = round($surfaceCalculator->calculateHexagonSurface(5), 10);

        $this->assertEquals(250, $contentCalculator->CalculatePrismContent(10, $rectangle));
        $this->assertEquals(125, $contentCalculator->CalculatePrismContent(10, $triangle));
        $this->assertEquals(785.398163397, $contentCalculator->CalculatePrismContent(10, $circle));
        $this->assertEquals(649.519052838, $contentCalculator->CalculatePrismContent(10, $hexagon));
    }

    public function testRectangularPyramid () {
        $contentCalculator = new ContentCalculator;
        $surfaceCalculator = new SurfaceCalculator;

        $rectangle = $surfaceCalculator->CalculateRectangleSurface(5, 5);
        $this->assertEquals(2083.333333333333, $contentCalculator->CalculateRectangularPyramidContent($rectangle, 10));
    }

    public function testConeContent () {
        $contentCalculator = new ContentCalculator;
        $this->assertEqualsWithDelta(41.6666666667, $contentCalculator->CalculateRectangularPyramidContent(5, 5,), 0.0000001);
    }
}