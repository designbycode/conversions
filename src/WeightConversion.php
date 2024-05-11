<?php

namespace Designbycode\Conversions;

class WeightConversion
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

    public function toPounds(): float
    {
        return $this->kilograms * 2.20462;
    }

    public function toGrams(): float
    {
        return $this->kilograms * 1000.0;
    }

    public function toStone(): float
    {
        return $this->kilograms * 0.157473;
    }
}
