<?php

namespace Services;

use App\Services\WordsRecommendationService;
use PHPUnit\Framework\TestCase;

class WordsRecommendationServiceTest extends TestCase
{
    private const MOVIES =
        [
            "La La Land",
            "Pulp Fiction",
            "Gwiezdne wojny: Nowa nadzieja",
            "Mroczny Rycerz",
            "Władca Pierścieni: Drużyna Pierścienia",
            "Shrek"
        ];

    public function testGetRecommendationByMaximumWords(): void
    {
        $maximumWords = 2;
        $expected = [
            "Pulp Fiction",
            "Mroczny Rycerz",
            "Shrek",
        ];

        $result = WordsRecommendationService::getRecommendationByMaximumWords(self::MOVIES, $maximumWords);
        $this->assertCount(count($expected), $result);
        $this->assertSame($expected, $result);
    }
}
