<?php

    use Designbycode\Conversions\WeightConversion;

    it('can convert kilograms to pounds', function () {
        $pounds = WeightConversion::kilograms(100)->toPounds();
        expect($pounds)->toBe(220.462);
    });


