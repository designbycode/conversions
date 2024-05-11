<?php

namespace Designbycode\Conversions\Enums;

enum WeightUnits: string
{
    case Kilograms = 'kilograms';
    case Pounds = 'pounds';
    case Grams = 'grams';
    case Milligrams = 'milligrams';
    case Stone = 'stone';
    case MetricTon = 'metric_ton';
    case Ounce = 'ounce';

    public function conversionFactor(): float
    {
        return match ($this) {
            self::Kilograms => 1,
            self::Pounds => 2.20462,
            self::Grams => 1000,
            self::Stone => 0.15747,
            self::Milligrams => 1000000,
            self::MetricTon => 0.001,
            self::Ounce => 35.27396,
        };
    }
}
