<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

function calcGame() // Сначала нужно писать основные функции, после них вспомогательные
{
    $rules = 'What is the result of the expression?';

    $gameRound = function (): array {
        $signs = ['+', '-', '*'];
        $operation = $signs[array_rand($signs)];

        $a = random_int(1, 10);
        $b = random_int(1, 10);

        $answer = calculate($operation, $a, $b);
        return ["{$a} {$operation} {$b}", $answer];
    };

    runGame($rules, $gameRound);
}

function calculate($operation, $a, $b)
{
    switch ($operation) {
        case '+':
            return $result = $a + $b;
        case '-':
            return $result = $a - $b;
        case '*':
            return $result = $a * $b;
        default:
            return 'нет такой операции'; // у конструкции Switch должен быть варинт с Default!!
    }
}
