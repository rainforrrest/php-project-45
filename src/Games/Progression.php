<?php

namespace BrainGames\Progression;

use function BrainGames\Engine\runGame;

function progressionGame(): void
{
    $rules = 'What number is missing in the progression?';

    $gameRound = function (): array {
        $start = random_int(1, 20);
        $step = random_int(1, 5);
        $progression = [];

        for ($i = 0; $i < 10; $i++) {
            $currentElement = calcElement($start, $i, $step);
            $progression[] = $currentElement;
        }

        $randomIndex = random_int(0, 9);
        $rightAnswer = $progression[$randomIndex];
        $progression[$randomIndex] = '..';
        $questionProgress = implode(' ', $progression);

        return ["{$questionProgress}", $rightAnswer];
    };

    runGame($rules, $gameRound);
}

function calcElement(int $start, int $i, int $step): int
{
    $currElem = $start + $i * $step;
    return $currElem;
}
