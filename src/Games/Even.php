<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

function start(): void
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $gameRound = function (): array {
        $question = random_int(1, 100);
        $answer = isEven($question) ? 'yes' : 'no';

        return ["{$question}", $answer];
    };

    runGame($rules, $gameRound);
}

function isEven(int $value): bool
{
    return $value % 2 === 0;
}
