<?php
require_once('Systems.php');
class SurfaceCalculator
{
    //========================================================
    // CALCULATIONS FOR SURFACE
    //========================================================

    /**
     * Returns the surface of a rectangle.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $width
     * @param float $length
     * @param string $fromUnit
     * @param string $toUnit
     * @return float
     */
    public function CalculateRectangleSurface(float $width, float $length, string $fromUnit = "meter", string $toUnit = "meter") : float {
        return $width * $length;
    }

    /**
     * Returns the surface of a triangle.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $width
     * @param float $length
     * @param string $fromUnit
     * @param string $toUnit
     * @return float
     */
    public function calculateTriangleSurface(float $width, float $length, string $fromUnit = "meter", string $toUnit = "meter") : float {
        return $width * $length / 2;
    }

    /**
     * Returns the surface of a circle.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $radius
     * @param string $fromUnit
     * @param string $toUnit
     * @return float
     */
    public function calculateCirlceSurface(float $radius, string $fromUnit = "meter", string $toUnit = "meter") : float {
        return pi() * pow($radius, 2);
    }

    /**
     * Returns the surface of a hexagon.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $sideLength
     * @param string $fromUnit
     * @param string $toUnit
     * @return float
     */
    public function calculateHexagonSurface(float $sideLength, string $fromUnit = "meter", string $toUnit = "meter") : float {
        return 3 * sqrt(3) / 2 * pow($sideLength, 2);
    }
}
?>