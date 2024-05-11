<?php

namespace Designbycode\Conversions;

use Designbycode\Conversions\Enums\WeightUnits;
use InvalidArgumentException;

class WeightConversion
{
    private const DEFAULT_DECIMAL_PLACES = 3;

    private float $factor;

    public function __construct(protected float $kilograms)
    {
    }

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public static function fromKilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public static function fromPounds(float $pounds): self
    {
        $weightConversion = new self($pounds);
        $weightConversion->factor = WeightUnits::Pounds->conversionFactor();
        $weightConversion->kilograms = $pounds / $weightConversion->factor;

        return $weightConversion;
    }

    public static function fromUnit(float|int $value, string $unit): self
    {
        $weightUnit = WeightUnits::tryFrom($unit);
        if (! $weightUnit) {
            throw new InvalidArgumentException("Invalid weight unit: $unit");
        }

        return new static($value * $weightUnit->conversionFactor());
    }

    public function convertTo(WeightUnits $unit): float|int
    {
        $this->factor = $unit->conversionFactor();
        $result = $this->kilograms * $this->factor;

        return $this->formatResult($result);
    }

    private function formatResult(float|int $result): float|int
    {
        if ($this->factor === 1 || $this->factor === 1000 || $this->factor === 1000000) {
            return (int) $result;
        }

        return round($result, self::DEFAULT_DECIMAL_PLACES);
    }

    public function toKilograms(): float
    {
        return round($this->kilograms * WeightUnits::tryFrom('kilograms')->conversionFactor(), 3);
    }

    public function toPounds(): float
    {
        return round($this->kilograms * WeightUnits::tryFrom('pounds')->conversionFactor(), 3);
    }

    public function toGrams(): int
    {
        return $this->kilograms * WeightUnits::tryFrom('grams')->conversionFactor();
    }

    public function toStone(): float
    {
        return round($this->kilograms * WeightUnits::tryFrom('stone')->conversionFactor(), 3);
    }

    public function toMilligrams(): int
    {
        return $this->kilograms * WeightUnits::tryFrom('milligrams')->conversionFactor();
    }

    public function toMetricTon(): float
    {
        return round($this->kilograms * WeightUnits::tryFrom('metric_ton')->conversionFactor(), 3);
    }

    public function toOunce(): float
    {
        return round($this->kilograms * WeightUnits::tryFrom('ounce')->conversionFactor(), 3);
    }
}
