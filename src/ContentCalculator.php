<?php
namespace teunv\GeometricCalculator\ContentCalculator;

use Systems;
class ContentCalculator
{
    //========================================================
    // CALCULATIONS FOR CONTENT
    //========================================================

    /**
     * Returns the content of a sphere.
     * Calculation returns in the same metric as the metric send.
     * 
     * @param float $radius
     * @return float
     */
    public function CalculateSphereContent(float $radius) : float {
        return (4 / 3 * pow($radius, 3)) * pi();
    }

    /**
     * Returns the content of any prism.
     * Keep the metrics for $surface and $height the same.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $surface
     * @param float $height
     * @return float
     */
    public function CalculatePrismContent(float $surface, float $height) : float {
        return $surface * $height;
    }

    /**
     * Returns the content of a rectangular pyramid.
     * Keep the metrics for $base and $height the same.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $base
     * @param float $height
     * @return float
     */
    public function CalculateRectangularPyramidContent(float $base, float $height) : float {
        return 1 / 3 * (pow($base, 2) * $height);
    }

    /**
     * Returns the content of a cone.
     * Keep the metrics for $base and $radius the same.
     * Calculation returns in the same metric as the param's metric send.
     * 
     * @param float $base
     * @param float $height
     * @return float
     */
    public function CalculateConeContent(float $radius, float $height) : float {
        return 1 / 3 * (pow($radius, 2) * pi() * $height);
    }

    public function CalculateDensity(float $volume, float $mass) : float {
        return $volume / $mass;
    }
}
?>