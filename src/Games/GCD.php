<?php

namespace BrainGames\Games\GCD;

use function BrainGames\Engine\runGame;

function start(): void
{
    $rules = 'Find the greatest common divisor of given numbers.';

    $gameRound = function (): array {
        $a = random_int(0, 20);
        $b = random_int(0, 20);

        $ques = "{$a} {$b}";
        $theGCD = (string) findGCD($a, $b);

        return ["{$ques}", $theGCD];
    };

    runGame($rules, $gameRound);
}

function findGCD(int $a, int $b): int
{
    while (true) {
        if ($b === 0) {
            break;
        }

        $c = $a % $b;
        $a = $b;
        $b = $c;
    }

    return $a;
}
