<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

function start(): void
{
    $rules = 'What is the result of the expression?';

    $gameRound = function (): array {
        $signs = ['+', '-', '*'];
        $operation = $signs[array_rand($signs)];

        $a = random_int(1, 10);
        $b = random_int(1, 10);

        $answer = (string) calculate($operation, $a, $b);
        return ["{$a} {$operation} {$b}", $answer];
    };

    runGame($rules, $gameRound);
}

function calculate(string $operation, int $a, int $b): int
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        default:
            fwrite(STDERR, "Ошибка: неизвестная операция '$operation'\n");
            exit(1);
    }
}
