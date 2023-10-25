<?php

declare(strict_types=1);

namespace App\Services;

class FirstSymbolRecommendationService
{
    private const SYMBOL = 'w';

    /**
     * @param string[] $movies
     * @param string $symbol
     * @return string[]
     */
    public static function getRecommendationsBySpecialSymbolAndEvenLength(array $movies, string $symbol = self::SYMBOL): array
    {
        return array_values(
            array_filter($movies, function ($value) use ($symbol) {
                $trimmedValue = preg_replace('/\s+/', '', $value);

                return self::isEven($trimmedValue) && self::isComparedByFirstSymbol($trimmedValue, $symbol);
            })
        );
    }

    public static function isEven(string $string): bool
    {
        $length = strlen($string);

        return $length % 2 == 0;
    }

    public static function isComparedByFirstSymbol(string $string, string $symbol): bool
    {
        $firstSymbol = strtolower(substr($string, 0, 1));

        return $firstSymbol == $symbol;
    }
}
