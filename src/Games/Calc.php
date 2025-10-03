<?php

namespace BrainGames\Calc;

function calcRound(): array
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

}
