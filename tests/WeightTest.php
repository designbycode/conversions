<?php

use Designbycode\Conversions\WeightConversion;

it('can convert kilograms to pounds', function () {
    $pounds = WeightConversion::kilograms(100)->toPounds();
    expect($pounds)->toBe(220.462);
});

it('can convert kilograms to grams', function () {
    $grams = WeightConversion::kilograms(1)->toGrams();
    expect($grams)->toBe(1000.0);
});
