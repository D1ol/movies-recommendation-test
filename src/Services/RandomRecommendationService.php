<?php

declare(strict_types=1);

namespace App\Services;

class RandomRecommendationService
{
    private const COUNT = 3;

    /**
     * @param string[] $movies
     * @param int $count
     * @return string[]
     */
    public static function getRandomRecommendation(array $movies, int $count = self::COUNT): array
    {
        $keys = array_rand($movies, $count);

        $values = [];

        foreach ($keys as $key) {
            $values[] = $movies[$key];
        }

        return $values;
    }
}