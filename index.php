<?php

use App\Services\FirstSymbolRecommendationService;
use App\Services\RandomRecommendationService;
use App\Services\WordsRecommendationService;

require_once __DIR__ . '/vendor/autoload.php';

$movies = [
    "Pulp Fiction",
    "Incepcja",
    "Skazani na Shawshank",
    "Dwunastu gniewnych ludzi",
    "Ojciec chrzestny",
    "Django",
    "Matrix",
    "Leon zawodowiec",
    "Siedem",
    "Nietykalni",
    "Władca Pierścieni: Powrót króla",
    "Fight Club",
    "Forrest Gump",
    "Chłopaki nie płaczą",
    "Gladiator",
    "Człowiek z blizną",
    "Pianista",
    "Doktor Strange",
    "Szeregowiec Ryan",
    "Lot nad kukułczym gniazdem",
    "Wielki Gatsby",
    "Avengers: Wojna bez granic",
    "Życie jest piękne",
    "Pożegnanie z Afryką",
    "Szczęki",
    "Milczenie owiec",
    "Dzień świra",
    "Blade Runner",
    "Labirynt",
    "Król Lew",
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
    "Shrek",
    "Mad Max: Na drodze gniewu",
    "Terminator 2: Dzień sądu",
    "Piraci z Karaibów: Klątwa Czarnej Perły",
    "Truman Show",
    "Skazany na bluesa",
    "Infiltracja",
    "Gran Torino",
    "Spotlight",
    "Mroczna wieża",
    "Rocky",
    "Casino Royale",
    "Drive",
    "Piękny umysł",
    "Władca Pierścieni: Dwie wieże",
    "Zielona mila",
    "Requiem dla snu",
    "Forest Gump",
    "Requiem dla snu",
    "Milczenie owiec",
    "Czarnobyl",
    "Breaking Bad",
    "Nędznicy",
    "Seksmisja",
    "Pachnidło",
    "Nagi instynkt",
    "Zjawa",
    "Igrzyska śmierci",
    "Kiler",
    "Siedem dusz",
    "Dzień świra",
    "Upadek",
    "Lśnienie",
    "Pan życia i śmierci",
    "Gladiator",
    "Granica",
    "Hobbit: Niezwykła podróż",
    "Pachnidło: Historia mordercy",
    "Wielki Gatsby",
    "Titanic",
    "Sin City",
    "Przeminęło z wiatrem",
    "Królowa śniegu",
];


/**
 * @param string[] $args
 */
function main(array $args): void
{
    $randomMovies = RandomRecommendationService::getRandomRecommendation($args);
    echo sprintf('Your random recommendations: %s', implode(', ', $randomMovies));

    echo '</br>';

    $moviesBySpecialSymbol = FirstSymbolRecommendationService::getRecommendationsBySpecialSymbolAndEvenLength($args);
    echo sprintf('Your recommendations by special symbol: %s', implode(', ', $moviesBySpecialSymbol));

    echo '</br>';


    $moviesBySingleWord = WordsRecommendationService::getRecommendationByMaximumWords($args);
    echo sprintf('Your single word recommendations: %s', implode(', ', $moviesBySingleWord));
}

main($movies);