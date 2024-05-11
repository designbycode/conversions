<?php

use Designbycode\Conversions\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilograms(37)->toPounds();
    expect($pounds)->toBe(81.571);
});

it('can convert kilograms to pounds from unit', function () {
    $pounds = WeightConversion::fromUnit(37, 'kilograms')->toPounds();
    expect($pounds)->toBe(81.571);
});

it('can convert kilograms to grams', function () {
    $grams = WeightConversion::kilograms(37)->toGrams();
    expect($grams)->toBe(37000);
});

it('can convert kilograms to milligram ', function () {
    $milligram = WeightConversion::kilograms(10)->toMilligrams();
    expect($milligram)->toBe(10000000);
});

it('can convert kilograms to stone', function () {
    $stone = WeightConversion::kilograms(12)->toStone();
    expect($stone)->toBe(1.89);
});

it('can convert kilograms to metric ton', function () {
    $ton = WeightConversion::kilograms(1200)->toMetricTon();
    expect($ton)->toBe(1.2);
});

it('can convert kilograms to ounce', function () {
    $ounce = WeightConversion::kilograms(10)->toOunce();
    expect($ounce)->toBe(352.74);
});
