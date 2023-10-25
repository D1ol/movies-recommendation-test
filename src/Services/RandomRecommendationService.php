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
        $random = array_rand($movies, $count);

        if (is_int($random))
            return [
                $movies[$random]
            ];

        $values = [];

        foreach ($random as $key) {
            $values[] = $movies[$key];
        }

        return $values;
    }
}