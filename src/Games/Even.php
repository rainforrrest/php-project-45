<?php

namespace BrainGames\Even;

use function BrainGames\Engine\runGame;

function evenGame()
{
    $rules = 'Answer "yes" if the number is even, otherwise answer "no".';

    $gameRound = function (): array {
        $number = random_int(1, 100);
        $answer = isEven($number) ? 'yes' : 'no';

        return ["{$number}", $answer];
    };

    runGame($rules, $gameRound);
}

function isEven($value)
{
    return $value % 2 === 0;
}
