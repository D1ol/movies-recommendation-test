<?php

namespace Services;

use App\Services\RandomRecommendationService;
use PHPUnit\Framework\TestCase;

class RandomRecommendationServiceTest extends TestCase
{
    public function testGetRandomRecommendationByDefault(): void
    {
        $movies = [
            "Pulp Fiction",
            "Incepcja",
            "Skazani na Shawshank",
            "Dwunastu gniewnych ludzi",
            "Ojciec chrzestny",
            "Django",
        ];

        $result = RandomRecommendationService::getRandomRecommendation($movies);

        $this->assertIsArray($result);
        $this->assertCount(3, $result);
    }

    public function testGetRandomRecommendationByCount(): void
    {
        $expectedCount = 4;

        $movies = [
            "Pulp Fiction",
            "Incepcja",
            "Skazani na Shawshank",
            "Dwunastu gniewnych ludzi",
            "Ojciec chrzestny",
            "Django",
        ];

        $result = RandomRecommendationService::getRandomRecommendation($movies, $expectedCount);

        $this->assertIsArray($result);
        $this->assertCount($expectedCount, $result);
    }
}
