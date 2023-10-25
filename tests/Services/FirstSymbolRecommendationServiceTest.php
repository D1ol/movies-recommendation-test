<?php

namespace Services;

use App\Services\FirstSymbolRecommendationService;
use PHPUnit\Framework\TestCase;

class FirstSymbolRecommendationServiceTest extends TestCase
{
    const MOVIES =
        [
            "La La Land",
            "Whiplash",
            "Wyspa tajemnic",
            "Django",
            "American Beauty",
            "Szósty zmysł",
            "Gwiezdne wojny: Nowa nadzieja",
            "Mroczny Rycerz",
            "Władca Pierścieni: Drużyna Pierścienia",
            "Harry Potter i Kamień Filozoficzny",
            "Green Mile",
            "Iniemamocni",
            "Shrek"
        ];

    public function testIsEven(): void
    {
        $string = 'examples';

        $isEven = FirstSymbolRecommendationService::isEven($string);

        $this->assertIsBool($isEven);
        $this->assertEquals(true, $isEven);
    }

    public function testIsOdd(): void
    {
        $string = 'example';

        $isEven = FirstSymbolRecommendationService::isEven($string);

        $this->assertIsBool($isEven);
        $this->assertEquals(false, $isEven);
    }

    public function testIsComparedByFirstSymbol(): void
    {
        $string = 'Example string';
        $expectedSymbol = 'e';

        $isComparedByFirstSymbol = FirstSymbolRecommendationService::isComparedByFirstSymbol($string, $expectedSymbol);

        $this->assertIsBool($isComparedByFirstSymbol);
        $this->assertEquals(true, $isComparedByFirstSymbol);
    }

    public function testIsNotComparedByFirstSymbol(): void
    {
        $string = 'Example string';
        $expectedSymbol = 'x';

        $isComparedByFirstSymbol = FirstSymbolRecommendationService::isComparedByFirstSymbol($string, $expectedSymbol);

        $this->assertIsBool($isComparedByFirstSymbol);
        $this->assertEquals(false, $isComparedByFirstSymbol);
    }

    public function testGetRecommendationsBySpecialSymbolAndEvenLength(): void
    {
        $expected = [
            "Whiplash",
        ];

        $result = FirstSymbolRecommendationService::getRecommendationsBySpecialSymbolAndEvenLength(self::MOVIES);
        $this->assertCount(count($expected), $result);
        $this->assertSame($expected, $result);
    }
}
