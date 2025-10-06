<?php

namespace BrainGames\Prime;

use function BrainGames\Engine\runGame;

function primeGame()
{
    $rules = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $namespase = __NAMESPACE__;

    runGame($rules, $namespase);

}

function gameRound()
{
    $numberQues = random_int(1, 100);
    $corrAnswer = isSimple($numberQues) ? 'yes' : 'no';

    return ["{$numberQues}", $corrAnswer];
}

function isSimple($number)
{
    if ($number < 2) {
        return false; 
    } elseif ($number === 2) {
        return true;
    } elseif ($number % 2 === 0) {
        return false;
    }


    $root = floor(sqrt($number));
    
    if ($root >= 3) {
        
        $divisors = [];
        $firstElement = 3;
        
        while ($firstElement <= $root) {
        	$divisors[] = $firstElement;
        	$step = 2;
        	$firstElement = $firstElement + $step;
        }
        
        foreach ($divisors as $divisor) {
            if ($number % $divisor === 0) {
            return false;
            }
        } 
    }
    
    return true;
}
