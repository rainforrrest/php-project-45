<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

function start(): void
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $gameRound = function (): array {
        $numberQues = random_int(1, 100);
        $corrAnswer = isPrime($numberQues) ? 'yes' : 'no';

        return ["{$numberQues}", $corrAnswer];
    };

    runGame($rules, $gameRound);
}

function isPrime(int $number): bool
{
    $answer = true;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            $answer = false;
            break;
        }
    }

    return $answer;
}
