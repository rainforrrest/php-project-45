<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

function start(): void
{
    $rules = 'What number is missing in the progression?';

    $gameRound = function (): array {

        $start = random_int(1, 20);
        $step = random_int(1, 5);
        $lengthOfProgression = 10;
        $progression = [];

        for ($i = 0; $i < $lengthOfProgression; $i++) {
            $currentElement = calcElement($start, $i, $step);
            $progression[] = $currentElement;
        }

        $randomIndex = random_int(0, 9);
        $rightAnswer = (string) $progression[$randomIndex];
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
