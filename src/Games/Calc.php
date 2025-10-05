<?php

namespace BrainGames\Calc;

use function BrainGames\Engine\runGame;

function calcGame()
{
    $rules = 'What is the result of the expression?';
    $gameRound = function (): array 
    {
        $signs = ['+', '-', '*'];
        $operation = $signs[array_rand($signs)];

        $a = random_int(1, 10);
        $b = random_int(1, 10);

        switch($operation) 
            {
                case '+':
                    $answer = $a + $b; break;
                case '-':
                    $answer = $a - $b; break;
                case '*':
                    $answer = $a * $b; break;
            }


        return ["{$a} {$operation} {$b}", $answer];
    };

    runGame($rules, $gameRound);

}
