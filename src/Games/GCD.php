<?php

namespace BrainGames\GCD;

use function BrainGames\Engine\runGame;

function gcdGame()
{
    $rules = 'Find the greatest common divisor of given numbers.';
    $namespase = __NAMESPACE__;

    runGame($rules, $namespase);
}

function gameRound(): array
{
    $a = random_int(0, 20);
    $b = random_int(0, 20);

    $ques = "{$a} {$b}";
    $theGCD = findGCD($a, $b);

    return ["{$ques}", $theGCD];
}

function findGCD($a, $b)
{
    while (true) {
        if ($b === 0) {
	        break;
	    }

        $c = $a % $b;
        $a = $b;
        $b = $c;
    }

    return $GCD = $a;
}
