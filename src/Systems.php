<?php
namespace teunv\GeometricCalculator;

class Systems
{
    private const METRICS = [
        "km" => 1000,
        "hm" => 100,
        "dam" => 10,
        "m" => 1,
        "dm" => 0.1,
        "cm" => 0.01,
        "mm" => 0.001,

        "in" => 0.0254,
        "ft" => 0.3048,
        "yd" => 0.9144,
        "mi" => 1609.344
    ];

    /**
     * Calculates a unit
     * 
     * Units to choose from:
     * - km
     * - hm
     * - dam
     * - m
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
        return $amount / self::METRICS[$unitOutput] * self::METRICS[$unitInput];
    }
}