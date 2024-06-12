<?php
namespace teunv\GeometricCalculator\Systems;

class Systems
{
    private static $metrics = [
        "km" => 1000,
        "hm" => 100,
        "dam" => 10,
        "dm" => 0.1,
        "cm" => 0.01,
        "mm" => 0.001,

        "in" => 39.3700787402,
        "ft" => 3.280839895,
        "yd" => 1.0936132983,
        "mi" => 0.0006213712
    ];

    /**
     * Calculates a unit
     * 
     * Units to choose from:
     * - km
     * - hm
     * - dam
     * - dm
     * - cm
     * - mm
     * - in
     * - ft
     * - yd
     * - mi
     * 
     * @param string $input
     * @param string $unitOutput
     * @param float $amount
     */
    public function CalculateUnits(string $unitInput, string $unitOutput, float $amount) : float {
        return $amount / $this->metrics[$unitInput] * $this->metrics[$unitOutput];
    }
}