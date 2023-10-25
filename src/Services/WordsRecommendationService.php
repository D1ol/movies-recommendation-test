<?php

declare(strict_types=1);

namespace App\Services;

class WordsRecommendationService
{
    private const MAXIMUM_WORDS = 1;

    /**
     * @param string[] $movies
     * @param int $maximumWords
     * @return string[]
     */
    public static function getRecommendationByMaximumWords(array $movies, int $maximumWords = self::MAXIMUM_WORDS): array
    {
        return array_values(
            array_filter($movies, function (string $value) use ($maximumWords) {
                return str_word_count($value, 0, 'ąćęłńóśżźĄĆĘŁŃÓŚŻŹ') <= $maximumWords;
            })
        );
    }
}